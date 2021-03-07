<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BagItemWarehouseOutRequest;
use App\Models\BagItemWarehouseOut;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Stock;
use App\Models\WarehouseOut;

/**
 * Class BagItemWarehouseOutCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BagItemWarehouseOutCrudController extends CrudController
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
        CRUD::setModel(\App\Models\BagItemWarehouseOut::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/bagitemwarehouseout');
        CRUD::setEntityNameStrings('bagitemwarehouseout', 'bag_item_warehouse_outs');
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
        CRUD::column('warehouse_out_id');
        CRUD::column('item_id');
        CRUD::column('qty');
        CRUD::column('price');
        CRUD::column('created_at');
        CRUD::column('updated_at');
        CRUD::column('qty_confirm');

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
        CRUD::setValidation(BagItemWarehouseOutRequest::class);

        CRUD::field('id');
        CRUD::field('warehouse_out_id');
        CRUD::field('item_id');
        CRUD::field('qty');
        CRUD::field('price');
        CRUD::field('created_at');
        CRUD::field('updated_at');
        CRUD::field('qty_confirm');

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
        $warehouse = WarehouseOut::find($request->warehouse_out_id);
        $stock = Stock::where('warehouse_id', '=', $warehouse->warehouse_id)->where('item_id', '=', $request->item_id)->first();
        if ($request->qty > $stock->stock_on_hand) {
            \Alert::add('danger', 'Stock tidak mencukupi')->flash();
            return redirect()->back();
        }
        $find = BagItemWarehouseOut::where('warehouse_out_id', '=', $request->warehouse_out_id)->where('item_id', '=', $request->item_id)->first();
        if (!empty($find)) {
            $limit = $find->qty + $request->qty;
            if ($limit > $stock->stock_on_hand) {
                \Alert::add('danger', 'Stock tidak mencukupi')->flash();
                return redirect()->back();
            }else{
                $data = BagItemWarehouseOut::findOrFail($request->item_id);
                $data->qty = $data->qty + $request->qty;
                $data->update();
            }
        } else {
            $item = Item::findOrFail($request->item_id);
            $data = new BagItemWarehouseOut;
            $data->warehouse_out_id = $request->warehouse_out_id;
            $data->item_id = $request->item_id;
            $data->serial = $item->serial;
            $data->qty = $request->qty;
            $data->uom = $item->unit;
            $data->save();
        }

        \Alert::add('success', 'Berhasil tambah item ' . $item->name)->flash();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $data = BagItemWarehouseOut::findOrFail($id);
        $data->delete();

        \Alert::add('danger', 'Berhasil hapus data Item')->flash();
        return redirect()->back();
    }
}
