<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BagItemWarehouseInRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;
use App\Models\BagItemWarehouseIn;
use App\Models\Item;
use App\Models\WarehouseIn;

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
        $find = BagItemWarehouseIn::where('warehouse_in_id', '=', $request->warehouse_in_id)->where('item_id', '=', $request->item_id)->first();
        if (!empty($find)) {
            $data = BagItemWarehouseIn::findOrFail($request->item_id);
            $data->qty = $data->qty + $request->qty;
            $data->update();
        } else {
            $item = Item::findOrFail($request->item_id);
            $data = new BagItemWarehouseIn;
            $data->warehouse_in_id = $request->warehouse_in_id;
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
        $grand_total = WarehouseIn::findOrFail($request->warehouse_in_id);
        $grand_total->grand_total = $grand_total->grand_total + $sub_total;
        $grand_total->update();

        \Alert::add('success', 'Berhasil tambah item ' . $item->name)->flash();
        return redirect()->back();
    }
}
