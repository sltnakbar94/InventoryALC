<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReturnCustomerDetailRequest;
use App\Models\DeliveryNoteDetail;
use App\Models\InvoiceDetail;
use App\Models\ReturnCustomer;
use App\Models\ReturnCustomerDetail;
use App\Models\Stock;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

/**
 * Class ReturnCustomerDetailCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ReturnCustomerDetailCrudController extends CrudController
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
        CRUD::setModel(\App\Models\ReturnCustomerDetail::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/returncustomerdetail');
        CRUD::setEntityNameStrings('returncustomerdetail', 'return_customer_details');
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
        CRUD::setValidation(ReturnCustomerDetailRequest::class);

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

    public function getReturnCustomerDetailById(Request $request)
    {
        $ReturnCustomerDetail = ReturnCustomerDetail::find($request->return_customer_detail_id);
        if ($ReturnCustomerDetail == null) {
            $return = array (
                'code' => 404,
                'error' => true,
                'message' => 'Data Tidak Ditemukan',
            );
        }else{
            $return = array (
                'code' => 200,
                'success' => true,
                'data' => $ReturnCustomerDetail,
                'message' => 'Data Ditemukan',
            );
        }
        return $return;
    }

    public function update(Request $request)
    {
        $header = ReturnCustomer::find($request->return_customer_id);
        $detail = ReturnCustomerDetail::find($request->return_customer_detail_id);
        if (!empty($request->item_change_id)) {
            $item_id = $request->item_change_id;
        } else {
            $item_id = $detail->item_id;
        }
        $sum = $detail->qty_before - $request->qty;
        if ($sum < 0) {
            \Alert::add('danger', 'Gagal Jumlah')->flash();
            return redirect()->back();
        }
        $detail->item_change_id = $item_id;
        $detail->qty = $request->qty;
        $detail->qty_after = $detail->qty_before - $request->qty + $request->qty_change;
        $detail->update();
        // Invoice Detail
        $invoice_detail = $header->invoice->details->where('item_id', '=', $detail->item_id)->first();
        $update_invoice_detail = InvoiceDetail::find($invoice_detail->id);
        $update_invoice_detail->item_id = $item_id;
        $update_invoice_detail->qty = $detail->qty_after;
        $update_invoice_detail->update();
        // Delivery Note Detail
        $delivery_note_detail = $header->deliveryNote->details->where('item_id', '=', $detail->item_id)->first();
        $update_delivery_note_detail = DeliveryNoteDetail::find($delivery_note_detail->id);
        $update_delivery_note_detail->item_id = $item_id;
        $update_delivery_note_detail->qty = $detail->qty_after;
        $update_delivery_note_detail->update();
        // Warehouse Out Detail
        $warehouse_out_detail = $header->warehouseOut->details->where('item_id', '=', $detail->item_id)->first();
        $update_warehouse_out_detail = DeliveryNoteDetail::find($warehouse_out_detail->id);
        $update_warehouse_out_detail->item_id = $item_id;
        $update_warehouse_out_detail->qty = $detail->qty_after;
        $update_warehouse_out_detail->update();
        // Stock Retur In
        $stock = Stock::where('warehouse_id', '=', $header->warehouseOut->warehouse_id)->where('item_id', '=', $detail->item_id)->first();
        $update_stock_in = Stock::find($stock->id);
        $update_stock_in->stock_on_hand += $request->qty;
        $update_stock_in->stock_on_location += $request->qty;
        $update_stock_in->update();
        // Stock Retur out
        $stock = Stock::where('warehouse_id', '=', $header->warehouseOut->warehouse_id)->where('item_id', '=', $item_id)->first();
        $update_stock_out = Stock::find($stock->id);
        $update_stock_out->stock_on_hand -= $request->qty_change;
        $update_stock_out->stock_on_location -= $request->qty_change;
        $update_stock_out->update();

        \Alert::add('success', 'Berhasil Melakukan retur')->flash();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $detail = ReturnCustomerDetail::find($id);
        $header = ReturnCustomer::find($detail->return_customer_id);
        $sum = $detail->qty_before;
        $detail->qty = $detail->qty_before;
        $detail->qty_after = 0;
        $detail->update();
        // Invoice Detail
        $invoice_detail = $header->invoice->details->where('item_id', '=', $detail->item_id)->first();
        $update_invoice_detail = InvoiceDetail::destroy($invoice_detail->id);
        // Delivery Note Detail
        $delivery_note_detail = $header->deliveryNote->details->where('item_id', '=', $detail->item_id)->first();
        $update_delivery_note_detail = DeliveryNoteDetail::destroy($delivery_note_detail->id);
        // Warehouse Out Detail
        $warehouse_out_detail = $header->warehouseOut->details->where('item_id', '=', $detail->item_id)->first();
        $update_warehouse_out_detail = DeliveryNoteDetail::destroy($warehouse_out_detail->id);
        // Stock Retur In
        $stock = Stock::where('warehouse_id', '=', $header->warehouseOut->warehouse_id)->where('item_id', '=', $detail->item_id)->first();
        $update_stock_in = Stock::find($stock->id);
        $update_stock_in->stock_on_hand += $sum;
        $update_stock_in->stock_on_location += $sum;
        $update_stock_in->update();

        \Alert::add('danger', 'Berhasil Melakukan retur')->flash();
        return redirect()->back();
    }
}
