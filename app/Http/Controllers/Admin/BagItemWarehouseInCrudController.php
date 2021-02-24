<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use App\Models\WarehouseIn;
use Illuminate\Http\Request;
use App\Models\BagItemWarehouseIn;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BagItemWarehouseInRequest;
use App\Services\PurchaseOrderServices;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class BagItemWarehouseInCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BagItemWarehouseInCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function __construct(PurchaseOrderServices $purchaseOrderService, BagItemWarehouseIn $purchaseOrder) {
        $this->purchaseOrderService = $purchaseOrderService;

        $this->purchaseOrder = $purchaseOrder;
    }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\BagItemWarehouseIn::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/bagitemwarehousein');
        CRUD::setEntityNameStrings('bagitemwarehousein', 'bag_item_warehouse_ins');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('warehouse_in_id');
        CRUD::column('item_id');
        CRUD::column('qty');
        CRUD::column('price');
        CRUD::column('created_at');
        CRUD::column('updated_at');
        CRUD::column('flag');
        CRUD::column('qty_confirm');
        CRUD::column('user_id');

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
        CRUD::setValidation(BagItemWarehouseInRequest::class);

        CRUD::field('id');
        CRUD::field('warehouse_in_id');
        CRUD::field('item_id');
        CRUD::field('qty');
        CRUD::field('price');
        CRUD::field('created_at');
        CRUD::field('updated_at');
        CRUD::field('flag');
        CRUD::field('qty_confirm');
        CRUD::field('user_id');

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
        $sub_total = $this->purchaseOrderService->SumItemDiscountToSubTotal($request);
        try {
            DB::beginTransaction();
            $PO_Detail['status'] = $this->purchaseOrderService->CheckItemOnPODetail(array('warehouse_in_id' => $request->warehouse_in_id, 'item_id' => $request->item_id));
            $PO_Detail['item'] = $this->purchaseOrderService->ItemOnPODetail(array('warehouse_in_id' => $request->warehouse_in_id, 'item_id' => $request->item_id));

            if ($PO_Detail['status']) {
                BagItemWarehouseIn::create([
                    'warehouse_in_id' => $request->warehouse_in_id,
                    'item_id'        => $request->item_id,
                    'qty'            => $request->qty,
                    'price'          => $request->price,
                    'discount'       => $request->discount,
                    'sub_total'      => $sub_total,
                    'status'         => 0
                ]);
            }else{
                BagItemWarehouseIn::find($PO_Detail['item']->id)->update([
                    'qty'           => $request->qty,
                    'price'         => $request->price,
                    'discount'      => $request->discount,
                    'sub_total'     => $sub_total,
                    'status'        => '1'
                ]);
            }

            $SO_GT_update = $this->purchaseOrderService->SumItemPriceByPurchaseOrderID($request->warehouse_in_id);
            WarehouseIn::find($request->warehouse_in_id)->update([
                'grand_total' => $SO_GT_update
            ]);
            DB::commit();
            \Alert::add('success', 'Berhasil tambah item ')->flash();
            return redirect()->back();
        } catch (\Throwable $th) {
            DB::rollback();
            \Alert::add('error', 'Gagal tambah item ' . $th->getMessage().' on Line '. $th->getLine())->flash();
            return redirect()->back();
        }

        // $find = BagItemWarehouseIn::where('warehouse_in_id', '=', $request->warehouse_in_id)->where('item_id', '=', $request->item_id)->first();
        // if (!empty($find)) {
        //     $data = BagItemWarehouseIn::findOrFail($request->item_id);
        //     $data->qty = $data->qty + $request->qty;
        //     $data->update();
        // } else {
        //     $item = Item::findOrFail($request->item_id);
        //     $data = new BagItemWarehouseIn;
        //     $data->warehouse_in_id = $request->warehouse_in_id;
        //     $data->item_id = $request->item_id;
        //     $data->serial = $item->serial;
        //     $data->price = $request->price;
        //     $data->qty = $request->qty;
        //     $data->uom = $item->unit;
        //     $data->discount = $request->discount;
        //     if (!empty($request->discount)) {
        //         $sub_total = ($request->price - ($request->discount/100*$request->price))*$request->qty;
        //         $data->sub_total = $sub_total;
        //     } else {
        //         $sub_total = $request->price*$request->qty;
        //         $data->sub_total = $sub_total;
        //     }
        //     $data->save();
        // }
        // $grand_total = WarehouseIn::findOrFail($request->warehouse_in_id);
        // $grand_total->grand_total = $grand_total->grand_total + $sub_total;
        // $grand_total->update();

        // \Alert::add('success', 'Berhasil tambah item ' . $item->name)->flash();
        // return redirect()->back();
    }

    public function destroy($id)
    {
        $data = BagItemWarehouseIn::findOrFail($id);
        $grand_total = WarehouseIn::findOrFail($data->warehouse_in_id);
        $grand_total->grand_total = $grand_total->grand_total - $data->sub_total;
        $grand_total->update();
        $data->delete();

        \Alert::add('success', 'Berhasil hapus data Item')->flash();
        return redirect()->back();
    }
}
