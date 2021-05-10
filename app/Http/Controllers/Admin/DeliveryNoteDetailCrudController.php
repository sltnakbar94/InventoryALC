<?php

namespace App\Http\Controllers\Admin;

use App\Flag;
use App\Http\Requests\DeliveryNoteDetailRequest;
use App\Models\BagItemWarehouseOut;
use App\Models\DeliveryNote;
use App\Models\DeliveryNoteDetail;
use App\Models\Item;
use App\Models\WarehouseOut;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;

/**
 * Class DeliveryNoteDetailCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DeliveryNoteDetailCrudController extends CrudController
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
        CRUD::setModel(\App\Models\DeliveryNoteDetail::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/deliverynotedetail');
        CRUD::setEntityNameStrings('deliverynotedetail', 'delivery_note_details');
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
        CRUD::setValidation(DeliveryNoteDetailRequest::class);

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

        $header = DeliveryNote::findOrFail($request->delivery_note_id);
        $header_do = $header->WarehouseOut;
        $do_details = BagItemWarehouseOut::where('warehouse_out_id', '=', $header_do->id)->get();
        $item_id = collect($do_details->toArray())->all();
        $items = Item::whereIn('id', array_column($item_id, 'item_id'))->get();
        foreach ($do_details as $do_detail) {
            $item = Item::find($do_detail->item_id);
            $find = DeliveryNoteDetail::where('delivery_note_id', '=', $request->delivery_note_id)->where('item_id', '=', $do_detail->item_id)->first();
            if (empty($find)) {
                $detail = new DeliveryNoteDetail;
                $detail->delivery_note_id = $request->delivery_note_id;
                $detail->item_id = $do_detail->item_id;
                $detail->qty = $do_detail->qty;
                $detail->serial = $item->serial;
                $detail->uom = $item->uom;
                $detail->user_id = backpack_auth()->id();
                $detail->save();
            } else {
                $detail = DeliveryNoteDetail::findOrFail($find->id);
                $detail->qty = $detail->qty + $do_detail->qty;
                $detail->update();
            }

        }
        \Alert::add('success', 'Berhasil tambah item ')->flash();
        return redirect()->back();
    }

    public function accept($id)
    {
        $data = DeliveryNoteDetail::findOrFail($id);
        $data->status = Flag::COMPLETE;
        $data->update();
        if (empty(DeliveryNoteDetail::where('delivery_note_id', '=', $data->delivery_note_id)->where('status', '=', 0)->first())) {
            $header = DeliveryNote::findOrFail($data->delivery_note_id);
            $header->status = Flag::COMPLETE;
            $header->update();
        }

        \Alert::add('success', 'Berhasil konfirmasi data Item')->flash();
        return redirect()->back();
    }

    public function denied($id)
    {
        $data = DeliveryNoteDetail::findOrFail($id);
        $data->status = Flag::DENIED;
        $data->update();
        if (empty(DeliveryNoteDetail::where('delivery_note_id', '=', $data->delivery_note_id)->where('status', '=', 0)->first())) {
            $header = DeliveryNote::findOrFail($id);
            $header->status = Flag::COMPLETE;
            $header->update();
        }

        \Alert::add('success', 'Berhasil konfirmasi data Item')->flash();
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $detail = DeliveryNoteDetail::findOrFail($request->delivery_by_sales_detail_id);
        $detail->qty = $request->qty;
        $detail->update();

        \Alert::add('success', 'Berhasil ubah data item ')->flash();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $data = DeliveryNoteDetail::findOrFail($id);
        $data->delete();

        \Alert::add('danger', 'Berhasil hapus data Item')->flash();
        return redirect()->back();
    }
}
