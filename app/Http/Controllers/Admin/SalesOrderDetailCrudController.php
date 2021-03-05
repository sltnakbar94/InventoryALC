<?php

namespace App\Http\Controllers\Admin;

use PDF;
use App\Flag;
use App\Models\Item;
use App\Models\SalesOrder;
use Illuminate\Http\Request;
use App\Services\CRUDServices;
use App\Models\SalesOrderDetail;
use Illuminate\Support\Facades\DB;
use Prologue\Alerts\Facades\Alert;
use App\Services\SalesOrderServices;
use App\Http\Requests\SalesOrderDetailRequest;
use App\Models\SubmissionFormDetail;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SalesOrderDetailCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SalesOrderDetailCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function __construct(SalesOrderServices $salesOrderService, SalesOrder $salesOrder) {
        $this->salesOrderService = $salesOrderService;

        $this->salesOrder = $salesOrder;
    }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\SalesOrderDetail::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/salesorderdetail');
        CRUD::setEntityNameStrings('salesorderdetail', 'sales_order_details');
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
        CRUD::setValidation(SalesOrderDetailRequest::class);

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
        $header = SalesOrder::findOrFail($request->sales_order_id);
        $header_pr = $header->purchaseRequisition;
        $pr_detail_id = collect($header_pr->toArray())->all();
        $pr_details = SubmissionFormDetail::whereIn('submission_form_id', array_column($pr_detail_id, 'id'))->get();
        $item_id = collect($pr_details->toArray())->all();
        $items = Item::whereIn('id', array_column($item_id, 'item_id'))->get();
        foreach ($pr_details as $pr_detail) {
            $item = Item::find($pr_detail->item_id);
            $find = SalesOrderDetail::where('sales_order_id', '=', $request->sales_order_id)->where('item_id', '=', $pr_detail->item_id)->first();
            if (empty($find)) {
                $detail = new SalesOrderDetail;
                $detail->sales_order_id = $request->sales_order_id;
                $detail->item_id = $pr_detail->item_id;
                $detail->qty = $pr_detail->qty;
                $detail->serial = $item->serial;
                $detail->uom = $item->uom;
                $detail->user_id = backpack_auth()->id();
                $detail->save();
            } else {
                $detail = SalesOrderDetail::findOrFail($find->id);
                $detail->qty = $detail->qty + $pr_detail->qty;
                $detail->update();
            }

        }
        \Alert::add('success', 'Berhasil tambah item ')->flash();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $order_detail = SalesOrderDetail::findOrFail($id);
        $grand_total = SalesOrder::findOrFail($order_detail->sales_order_id);
        $grand_total->grand_total = $grand_total->grand_total - $order_detail->sub_total;
        $grand_total->update();
        $order_detail->delete();

        \Alert::add('success', 'Berhasil hapus data Item')->flash();
        return redirect()->back();
    }

    public function accept($id)
    {
        $data = SalesOrderDetail::findOrFail($id);
        $data->status = 1;
        $data->update();
        if (empty(SalesOrderDetail::where('sales_order_id', '=', $data->sales_order_id)->where('status', '=', 0)->first())) {
            $header = SalesOrder::findOrFail($data->sales_order_id);
            $header->status = 1;
            $header->update();
        }

        \Alert::add('success', 'Berhasil konfirmasi data Item')->flash();
        return redirect()->back();
    }

    public function denied($id)
    {
        $data = SalesOrderDetail::findOrFail($id);
        $data->status = 2;
        $data->update();
        if (empty(SalesOrderDetail::where('sales_order_id', '=', $data->sales_order_id)->where('status', '=', 0)->first())) {
            $header = SalesOrder::findOrFail($id);
            $header->status = 1;
            $header->update();
        }

        \Alert::add('success', 'Berhasil konfirmasi data Item')->flash();
        return redirect()->back();
    }
}
