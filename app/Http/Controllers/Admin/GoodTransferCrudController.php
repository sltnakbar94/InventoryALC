<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\GoodTransferRequest;
use App\Models\GoodTransfer;
use App\Models\Item;
use App\Models\Stock;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;

/**
 * Class GoodTransferCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class GoodTransferCrudController extends CrudController
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
        CRUD::setModel(\App\Models\GoodTransfer::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/goodtransfer');
        CRUD::setEntityNameStrings('goodtransfer', 'good_transfers');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->removeButton('show');
        $this->crud->removeButton('update');
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
        CRUD::setValidation(GoodTransferRequest::class);

        $this->crud->addFields(['date_transfer']);

        $this->crud->addField([
            'type' => 'select2',
            'name' => 'stock_id',
            'label' => 'Pilih gudang dan item',
            'entity' => 'stock',
            'attribute' => 'itemName',
            'model' => 'App\Models\Stock'
        ]);

        $this->crud->addField([
            'type' => 'number',
            'name' => 'qty',
            'label' => 'Quantity',
        ]);

        $this->crud->addField([
            'type' => 'select2',
            'name' => 'warehouse_id',
            'label' => 'Pindah kegudang',
            'entity' => 'warehouse',
            'attribute' => 'name',
            'model' => 'App\Models\Warehouse'
        ]);

        $this->crud->addField([
            'name' => 'user_id',
            'type' => 'hidden',
            'label'=> 'User who generate',
            'value'=> backpack_auth()->id()
        ]);

        $this->crud->removeSaveActions(['save_and_preview','save_and_edit','save_and_new']);
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
        $save = new GoodTransfer();
        $save->date_transfer = $request->date_transfer;
        $save->stock_id = $request->stock_id;
        $save->qty = $request->qty;
        $save->warehouse_id = $request->warehouse_id;
        $save->user_id = $request->user_id;
        $stock = Stock::find($request->stock_id);
        $stock->stock_on_location -= $request->qty;
        $stock->stock_on_hand -= $request->qty;
        $stock->update();
        $item = Item::find($stock->item_id);
        $available = Stock::where('warehouse_id', '=', $request->warehouse_id)->where('item_id', '=', $item->id)->first();
        if (!empty($available)) {
            $update = Stock::find($available->id);
            $update->stock_on_location += $request->qty;
            $update->stock_on_hand += $request->qty;
            $update->update();
        } else {
            $update = new Stock();
            $update->warehouse_id = $request->warehouse_id;
            $update->item_id = $item->item_id;
            $update->stock_on_location += $request->qty;
            $update->stock_on_hand += $request->qty;
            $update->save();
        }
        $save->save();

        \Alert::add('success', 'Berhasil Input Data Transfer Barang')->flash();
        return redirect(backpack_url('goodtransfer'));
    }
}
