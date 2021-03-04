<?php

namespace App\Http\Controllers\Admin;

use PDF;
use App\Flag;
use App\Models\Item;
use App\Models\Stackholder;
use App\Models\WarehouseIn;
use Illuminate\Http\Request;
use App\Models\BagItemWarehouseIn;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\WarehouseInRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use \App\Services\PurchaseOrderServices;


/**
 * Class WarehouseInCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class WarehouseInCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation { show as traitShow; }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\WarehouseIn::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/warehousein');
        CRUD::setEntityNameStrings('Purchase Order', 'Purchase Order');

    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'po_number',
            'type' => 'text',
            'label' => 'Nomor PO'
        ]);

        $this->crud->addColumn([
            'name' => 'supplier_id',
            'type' => 'select',
            'entity' => 'supplier',
            'attribute' => 'company',
            'model' => 'App\Models\Stackholder',
            'label' => 'Supplier'
        ]);

        $this->crud->addColumn([
            'name' => 'po_date',
            'type' => 'date',
            'label' => 'Tanggal Masuk'
        ]);

        $this->crud->addColumn([
            'name' => 'description',
            'type' => 'textarea',
            'label' => 'Keterangan'
        ]);

        $this->crud->addColumn([
            'name' => 'user_id',
            'type' => 'select',
            'entity' => 'user',
            'attribute' => 'name',
            'model' => 'App\Models\User',
            'label' => 'Operator'
        ]);

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
    public function generateNomorPengiriman()
    {
        $day = date("d");
        $month = date("m");
        $year = date("Y");

        $count = WarehouseIn::withTrashed()->whereDate('created_at', date('Y-m-d'))->count();
        $number = str_pad($count + 1,3,"0",STR_PAD_LEFT);

        $generate = $month.$day."-".$number."/WHI-PO/".$year;

        return $generate;
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(WarehouseInRequest::class);
        $this->crud->removeSaveActions(['save_and_back','save_and_edit','save_and_new']);

        $this->crud->addField([
            'label' => "Nomor PO",
            'name'  => "po_number",
            'type'  => 'text',
            'value' => $this->generateNomorPengiriman(),
            'attributes' => [
                'readonly'    => 'readonly',
            ]
        ]);

        $this->crud->addField([
            'name' => 'po_date',
            'label' => 'Tanggal PO',
            'type' => 'date_picker',
        ]);

        $this->crud->addField([   // SelectMultiple = n-n relationship (with pivot table)
            'label'     => "Pilih Purchase Requisition",
            'type'      => 'select2_multiple',
            'name'      => 'purchaseRequisition', // the method that defines the relationship in your Model
            'pivot'     => true,
            'entity'    => 'purchaseRequisition',
            'attribute' => 'form_number',
            'model'     => 'App\Models\SubmissionForm',
            'options'   => (function ($query) {
                return $query->where('project_id', '=', 1)->where('status', '=', 0)->get();
            }),
        ]);

        $this->crud->addField([
            'name' => 'supplier_id',
            'label' => 'Supplier',
            'type' => 'select2_from_array',
            'options' => Stackholder::whereHas('stackholderRole', function ($query) {
                return $query->where('name', '=', 'supplier');
            })->pluck('company', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'ref_no',
            'label' => 'Nomor Referensi',
            'type' => 'text',
            'attributes' => [
                'placeholder' => 'Contoh : Nomor Surat Penawaran Harga',
              ],
        ]);

        $this->crud->addField([
            'name' => 'ppn',
            'label' => 'PPN (10%)',
            'type' => 'boolean',
            'hint' => 'Bila supplier belum PKP maka tidak Pakai PPN',
        ]);

        $this->crud->addField([
            'name' => 'term_of_paymnet',
            'label' => 'Term of Payment',
            'type' => 'textarea',
        ]);

        $this->crud->addField([
            'name' => 'description',
            'label' => 'Keterangan',
            'type' => 'textarea',
        ]);

        $this->crud->addField([   // date_range
            'name'  => ['start_date', 'end_date'], // db columns for start_date & end_date
            'label' => 'Estimasi Tanggal Mulai dan Akhir PO',
            'type'  => 'date_range',
        ]);

        $this->crud->addField([
            'name' => 'user_id',
            'type' => 'hidden',
            'value' => backpack_auth()->id()
        ]);

        $this->crud->addField([
            'name' => 'company_id',
            'type' => 'hidden',
            'value' => backpack_auth()->user()->company_id
        ]);

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
        $this->crud->removeSaveActions(['save_and_back','save_and_edit','save_and_new']);

        $this->crud->addField([
            'label' => "Nomor PO",
            'name'  => "po_number",
            'type'  => 'text',
            'attributes' => [
                'readonly'    => 'readonly',
            ]
        ]);

        $this->crud->addField([
            'name' => 'po_date',
            'label' => 'Tanggal PO',
            'type' => 'date_picker',
        ]);

        $this->crud->addField([   // SelectMultiple = n-n relationship (with pivot table)
            'label'     => "Pilih Purchase Requisition",
            'type'      => 'select2_multiple',
            'name'      => 'purchaseRequisition', // the method that defines the relationship in your Model
            'pivot'     => true,
            'entity'    => 'purchaseRequisition',
            'attribute' => 'form_number',
            'model'     => 'App\Models\SubmissionForm',
        ]);

        $this->crud->addField([
            'name' => 'supplier_id',
            'label' => 'Supplier',
            'type' => 'select2_from_array',
            'options' => Stackholder::whereHas('stackholderRole', function ($query) {
                return $query->where('name', '=', 'supplier');
            })->pluck('company', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'ref_no',
            'label' => 'Nomor Referensi',
            'type' => 'text',
            'attributes' => [
                'placeholder' => 'Contoh : Nomor Surat Penawaran Harga',
              ],
        ]);

        $this->crud->addField([
            'name' => 'discount',
            'label' => 'Diskon (%)',
            'type' => 'number',
            'hint' => 'Discount keseluruhan',
        ]);

        $this->crud->addField([
            'name' => 'ppn',
            'label' => 'PPN (10%)',
            'type' => 'boolean',
            'hint' => 'Bila supplier belum PKP maka tidak Pakai PPN',
        ]);

        $this->crud->addField([
            'name' => 'term_of_paymnet',
            'label' => 'Term of Payment',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'description',
            'label' => 'Keterangan',
            'type' => 'textarea',
        ]);

        $this->crud->addField([   // date_range
            'name'  => ['start_date', 'end_date'], // db columns for start_date & end_date
            'label' => 'Estimasi Tanggal Mulai dan Akhir PO',
            'type'  => 'date_range',
        ]);

        $this->crud->addField([
            'name' => 'user_id',
            'type' => 'hidden',
            'value' => backpack_auth()->id()
        ]);

        $this->crud->addField([
            'name' => 'company_id',
            'type' => 'hidden',
            'value' => backpack_auth()->user()->company_id
        ]);
    }

    protected function setupShowOperation()
    {
        $this->crud->setShowView('warehouse.in.show');
    }

    public function show($id)
    {
        $content = $this->traitShow($id);
        $content['data'] = WarehouseIn::findOrFail($id)->with('supplier')->first();
        $this->crud->addField([
            'name' => 'warehouse_in',
            'data' => $content['data']
        ]);

        $this->crud->addField([
            'name' => 'items',
            'data' => Item::all(),
        ]);

        $this->crud->addField([
            'name' => 'items_on-bag',
            'data' => BagItemWarehouseIn::all(),
        ]);
        return $content;
    }

    public function pdf(Request $request)
    {
        $sum = BagItemWarehouseIn::sum('sub_total');
        $data = WarehouseIn::where('id', '=', $request->id)->first();

        $pdf = PDF::loadview('warehouse.in.output',['data'=>$data, 'sum'=>$sum]);
    	return $pdf->stream($data->po_number.'.pdf');
    }

    public function storePic(Request $request)
    {
        $data = WarehouseIn::findOrFail($request->id);
        $data->pic_supplier = $request->pic;
        $data->update();

        \Alert::add('success', 'Berhasil tambah pic ' . $request->pic)->flash();
       return redirect()->back();
    }

    public function accept($id, PurchaseOrderServices $purchaseOrderService)
    {
        try {
            DB::beginTransaction();
            $data = BagItemWarehouseIn::findOrFail($id);
            $data->status = Flag::PLAN;
            $data->update();
            $item_on_bag = BagItemWarehouseIn::where('warehouse_in_id', '=', $data->warehouse_in_id)->where('status', '=', Flag::PLAN)->first();
            if (empty($item_on_bag)) {
                throw new \Exception("Data Tidak Ditemukan");
            }
            $header = WarehouseIn::findOrFail($data->warehouse_in_id);
            $header->status = Flag::PROCESS;
            $header->update();

            // Increase Qty Item After Approve
            $purchaseOrderService->IncreaseItemQTY($id);

            DB::commit();
            $return = array('status' => 'success', 'message' => 'Berhasil Konfirmasi Data Item');
        } catch (\Throwable $th) {
            DB::rollback();
            $return = array('status' => 'danger', 'message' => $th->getMessage());
        }
        \Alert::add($return['status'], $return['message'])->flash();
        return redirect()->back();
    }

    public function denied($id)
    {
        try {
            DB::beginTransaction();
            $data = BagItemWarehouseIn::findOrFail($id);
            $data->status = FLag::DENIED;
            $data->update();
            if (empty(BagItemWarehouseIn::where('warehouse_in_id', '=', $data->warehouse_in_id)->where('status', '=', Flag::PLAN)->first())) {
                throw new \Exception("Data Tidak Ditemukan");
            }
            $header = WarehouseIn::findOrFail($id);
            $header->status = Flag::PROCESS;
            $header->update();
            DB::commit();
            $return = array('status' => 'success', 'message' => 'Berhasil Konfirmasi Data Item');
        } catch (\Exception $th) {
            DB::rollBack();
            $return = array('status' => 'danger', 'message' => $th->getMessage());
        }
        \Alert::add($return['status'], $return['message'])->flash();
        return redirect()->back();
    }


}
