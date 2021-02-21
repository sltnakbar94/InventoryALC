<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SalesOrderDetailRequest;
use App\Models\Item;
use App\Models\SalesOrder;
use App\Models\SalesOrderDetail;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;
use PDF;

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
        $find = SalesOrderDetail::where('sales_order_id', '=', $request->sales_order_id)->where('item_id', '=', $request->item_id)->first();
        if (!empty($find)) {
            $data = SalesOrderDetail::findOrFail($request->item_id);
            $data->qty = $data->qty + $request->qty;
            $data->update();
        } else {
            $item = Item::findOrFail($request->item_id);
            $data = new SalesOrderDetail;
            $data->sales_order_id = $request->sales_order_id;
            $data->item_id = $request->item_id;
            $data->serial = $item->serial;
            $data->price = $request->price;
            $data->qty = $request->qty;
            $data->uom = $item->unit;
            $data->discount = $request->discount;
            if (!empty($request->discount)) {
                $sub_total = ($request->price - ($request->discount/100*$request->price))*$request->qty;
                $data->sub_total = $sub_total;
            } else {
                $sub_total = $request->price*$request->qty;
                $data->sub_total = $sub_total;
            }
            $data->save();
        }
        $grand_total = SalesOrder::findOrFail($request->sales_order_id);
        $grand_total->grand_total = $grand_total->grand_total + $sub_total;
        $grand_total->update();

        \Alert::add('success', 'Berhasil tambah item ' . $request->pic)->flash();
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
}
