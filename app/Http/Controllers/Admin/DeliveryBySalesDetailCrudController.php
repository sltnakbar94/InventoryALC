<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DeliveryBySalesDetailRequest;
use App\Models\DeliveryBySales;
use App\Models\DeliveryBySalesDetail;
use App\Models\Item;
use App\Models\SalesOrderDetail;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;

/**
 * Class DeliveryBySalesDetailCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DeliveryBySalesDetailCrudController extends CrudController
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
        CRUD::setModel(\App\Models\DeliveryBySalesDetail::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/deliverybysalesdetail');
        CRUD::setEntityNameStrings('deliverybysalesdetail', 'delivery_by_sales_details');
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
        CRUD::setValidation(DeliveryBySalesDetailRequest::class);

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
        $header = DeliveryBySales::findOrFail($request->delivery_by_sales_id);
        $header_so = $header->SalesOrder;
        $so_details = SalesOrderDetail::where('sales_order_id', '=', $header_so->id)->get();
        $item_id = collect($so_details->toArray())->all();
        $items = Item::whereIn('id', array_column($item_id, 'item_id'))->get();
        foreach ($so_details as $so_detail) {
            $item = Item::find($so_detail->item_id);
            $find = DeliveryBySalesDetail::where('delivery_by_sales_id', '=', $request->delivery_by_sales_id)->where('item_id', '=', $so_detail->item_id)->first();
            if (empty($find)) {
                $detail = new DeliveryBySalesDetail();
                $detail->delivery_by_sales_id = $request->delivery_by_sales_id;
                $detail->item_id = $so_detail->item_id;
                $detail->qty = $so_detail->qty;
                $detail->serial = $item->serial;
                $detail->uom = $item->uom;
                $detail->user_id = backpack_auth()->id();
                $detail->save();
            } else {
                $detail = DeliveryBySalesDetail::findOrFail($find->id);
                $detail->qty = $detail->qty + $so_detail->qty;
                $detail->update();
            }

        }
        \Alert::add('success', 'Berhasil tambah item ')->flash();
        return redirect()->back();
    }

    public function getDetail(Request $request)
    {
        $deliverybysalesdetail = DeliveryBySalesDetail::find($request->delivery_by_sales_detail_id);
        if ($deliverybysalesdetail == null) {
            $return = array (
                'code' => 404,
                'error' => true,
                'message' => 'Data Tidak Ditemukan',
            );
        }else{
            $return = array (
                'code' => 200,
                'success' => true,
                'data' => $deliverybysalesdetail,
                'message' => 'Data Ditemukan',
            );
        }
        return $return;
    }

    public function edit(Request $request)
    {
        $detail = DeliveryBySalesDetail::findOrFail($request->delivery_by_sales_detail_id);
        $detail->qty = $request->qty;
        $detail->update();

        \Alert::add('success', 'Berhasil ubah data item ')->flash();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $data = DeliveryBySalesDetail::findOrFail($id);
        $data->delete();

        \Alert::add('danger', 'Berhasil hapus data Item')->flash();
        return redirect()->back();
    }
}
