<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SubmissionFormDetailRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\SubmissionForm;
use App\Models\SubmissionFormDetail;
use App\Flag;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Unit;
use Illuminate\Support\Facades\Validator;

/**
 * Class SubmissionFormDetailCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SubmissionFormDetailCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\SubmissionFormDetail::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/submissionformdetail');
        CRUD::setEntityNameStrings('submissionformdetail', 'submission_form_details');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // columns

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(SubmissionFormDetailRequest::class);

        CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    public function store(Request $request)
    {
        $find = SubmissionFormDetail::where('submission_form_id', '=', $request->submission_form_id)->where('item_id', '=', $request->item_id)->where('deleted_at', '=', NULL)->first();
        $item = Item::findOrFail($request->item_id);
        if (!empty($find)) {
            $data = SubmissionFormDetail::findOrFail($request->item_id);
            $data->qty = $data->qty + $request->qty;
            $data->update();
        } else {
            $data = new SubmissionFormDetail;
            $data->submission_form_id = $request->submission_form_id;
            $data->item_id = $request->item_id;
            $data->serial = $item->serial;
            $data->qty = $request->qty;
            $data->uom = $item->unit;
            $data->save();
        }
        $item = Item::findOrFail($request->item_id);

        \Alert::add('success', 'Berhasil tambah item ' . $item->name)->flash();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $form_detail = SubmissionFormDetail::findOrFail($id);
        $form_detail->delete();

        \Alert::add('success', 'Berhasil hapus data Item')->flash();
        return redirect()->back();
    }

    public function accept($id)
    {
        $data = SubmissionFormDetail::findOrFail($id);
        $data->status = Flag::PROCESS;
        $data->update();
        if (empty(SubmissionFormDetail::where('submission_form_id', '=', $data->submission_form_id)->where('status', '=', 0)->first())) {
            $header = SubmissionForm::findOrFail($data->submission_form_id);
            $header->status = Flag::PROCESS;
            $header->update();
        }

        \Alert::add('success', 'Berhasil konfirmasi data Item')->flash();
        return redirect()->back();
    }

    public function denied($id)
    {
        $data = SubmissionFormDetail::findOrFail($id);
        $data->status = Flag::DENIED;
        $data->update();
        if (empty(SubmissionFormDetail::where('submission_form_id', '=', $data->submission_form_id)->where('status', '=', 0)->first())) {
            $header = SubmissionForm::findOrFail($id);
            $header->status = Flag::COMPLETE;
            $header->update();
        }

        \Alert::add('success', 'Berhasil konfirmasi data Item')->flash();
        return redirect()->back();
    }

    public function addItem(Request $request)
    {
        if ($request->brand == "AddBrand") {
            $validateBrand = Validator::make($request->all(), [
               'TambahBrand' => 'required',
               'BrandCode'   => 'required|unique:brand,code'
           ]);
        }
        if ($request->uom == "NewItem") {
            $validateNewItem = Validator::make($request->all(),[
                'SatuanBaru'=> 'required',
                'SatuanCode'=>  'required|unique:units,code'
            ]);
        }

        if ($request->category == "AddCategory") {
            $validator = Validator::make($request->all(),[
                'TambahCategory'=> 'required',
                'CodeCategory'  => 'required|unique:categories,code'
            ]);
        }

        if ($validator->fails() == true ) {
            \Alert::add('danger', 'Gagal menambah kategori,kategory harus diisi, Kode kategory harus unik')->flash();
            return redirect()->back();
        }

        if ($validateBrand->fails() == true) {
            \Alert::add('danger', 'Gagal Menambah Brand ,Nama Satuan Harus Diisi, Kode Satuan Harus unik')->flash();
            return redirect()->back();
        }

        if ($validateNewItem->fails() == true) {
            \Alert::add('danger', 'Gagal Menambah Item ,Nama Satuan Harus Diisi, Kode Satuan Harus unik')->flash();
            return redirect()->back();
        }

        $new_item = new Item;
        $brand = $request->brand ;
        if ($brand == "AddBrand") {
            $new_master_brand = new Brand ;
            $new_master_brand->code = $request->BrandCode ;
            $new_master_brand->name = $request->TambahBrand ;
            $new_master_brand->save();
            $new_item->brand = $new_master_brand->name ;
        }else{
            $new_item->brand = $request->brand;
        }

        $satuan = $request->uom;
        if ($satuan == "NewItem") {
            $new_master_units = new Unit ;
            $new_master_units->name = $request->SatuanBaru ;
            $new_master_units->code = $request->SatuanCode ;
            $new_master_units->save();
            $new_item->unit = $request->SatuanBaru ;
        }else{
            $new_item->unit = $request->uom;
        }

        $category = $request->category ;
        if ($category == "AddCategory") {
            $new_master_category = new Category ;
            $new_master_category->name = $request->TambahCategory ;
            $new_master_category->code = $request->CategoryCode;
            $new_master_category->save();
            $new_item->category = $request->TambahCategory;
        }else{
            $new_item->category = $request->category;
        }
        $new_item->name = $request->item;
        $new_item->serial = $request->serial;
        $new_item->save();

        $find = Item::where('name', '=', $request->item)->first();
        $data = new SubmissionFormDetail;
        $data->submission_form_id = $request->submission_form_id;
        $data->item_id = $find->id;
        $data->serial = $find->serial;
        $data->qty = $request->qty;
        $data->uom = $find->unit;
        $data->save();

        \Alert::add('success', 'Berhasil Menambah data Item')->flash();

    }
}
