<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReturnSupplierRequest;
use App\Models\ReturnSupplier;
use App\Models\Stock;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;

/**
 * Class ReturnSupplierCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ReturnSupplierCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation { destroy as traitDestroy; }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\ReturnSupplier::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/returnsupplier');
        CRUD::setEntityNameStrings('Return Supplier', 'Return Supplier');
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

        $this->crud->addColumn([
            'name'  => 'return_date', // The db column name
            'label' => 'Tanggal Return Barang', // Table column heading
            'type'  => 'date',
            // 'format' => 'l j F Y', // use something else than the base.default_date_format config value
        ]);

        $this->crud->addColumn([
            'name' => 'item_id',
            'type' => 'select',
            'entity' => 'item',
            'attribute' => 'detail_item',
            'model' => 'App\Models\Item',
            'label' => 'Barang Return'
        ]);

        $this->crud->addColumn([
            'name' => 'warehouse_id',
            'type' => 'select',
            'entity' => 'warehouse',
            'attribute' => 'name',
            'model' => 'App\Models\Warehouse',
            'label' => 'Gudang'
        ]);

        $this->crud->addColumn([
            'name' => 'qty',
            'type' => 'number',
            'label' => 'Jumlah Barang (Karung)'
        ]);

        $this->crud->addColumn([
            'name' => 'driver_name',
            'type' => 'text',
            'label' => 'Nama Pengemudi'
        ]);

        $this->crud->addColumn([
            'name' => 'vehicle_registration_number',
            'type' => 'text',
            'label' => 'Plat Nomor'
        ]);

        $this->crud->addColumn([
            'name' => 'description',
            'type' => 'textarea',
            'label' => 'Alasan Retur'
        ]);

        $this->crud->addColumn([
            'name'      => 'picture', // The db column name
            'label'     => 'Bukti Foto', // Table column heading
            'type'      => 'image',
            'prefix' => 'storage/',
            'height' => '100%',
            'width'  => '100%',
        ]);

        $this->crud->addColumn([
            'name' => 'user',
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
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ReturnSupplierRequest::class);

        $this->crud->addField([   // date_picker
            'name'  => 'return_date',
            'type'  => 'date_picker',
            'label' => 'Date',

            // optional:
            'date_picker_options' => [
               'todayBtn' => 'linked',
               'format'   => 'dd-mm-yyyy',
            ],
        ]);

        $this->crud->addField([
            'type' => 'select2',
            'name' => 'item_id',
            'label' => 'Item Retur',
            'entity' => 'item',
            'attribute' => 'detail_item',
            'model' => 'App\Models\Item'
        ]);

        $this->crud->addField([
            'type' => 'select2',
            'name' => 'warehouse_id',
            'label' => 'Dari Gudang',
            'entity' => 'warehouse',
            'attribute' => 'name',
            'model' => 'App\Models\Warehouse'
        ]);

        $this->crud->addField([
            'name' => 'qty',
            'label' => 'Jumlah',
            'type' => 'number',
        ]);

        $this->crud->addField([
            'name' => 'driver_name',
            'label' => 'Nama Pengemudi',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'vehicle_registration_number',
            'label' => 'Nomor Plat Kendaraan',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'description',
            'label' => 'Alasan Retur',
            'type' => 'textarea',
        ]);

        $this->crud->addField([   // Upload
            'name'      => 'picture',
            'label'     => 'Foto Bukti',
            'type'      => 'upload',
            'upload'    => true,
            'disk'      => 'public', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
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
        $save = new ReturnSupplier();
        $save->return_date = $request->return_date;
        $save->item_id = $request->item_id;
        $save->warehouse_id = $request->warehouse_id;
        $save->qty = $request->qty;
        $save->driver_name = $request->driver_name;
        $save->vehicle_registration_number = $request->vehicle_registration_number;
        $save->description = $request->description;
        $save->picture = $request->picture;
        $save->user_id = $request->user_id;
        $find_stock = Stock::where('item_id', '=', $request->item_id)->where('warehouse_id', '=', $request->warehouse_id)->first();
        $stock = Stock::find($find_stock->id);
        $stock->stock_on_hand -= $request->qty;
        $stock->stock_on_location -= $request->qty;
        $stock->update();
        $save->save();
        \Alert::add('success', 'Berhasil Input Data Return Barang')->flash();
        return redirect(backpack_url('returnsupplier'));
    }

    public function destroy($id)
    {
        $data = ReturnSupplier::find($id);
        $find_stock = Stock::where('item_id', '=', $data->item_id)->where('warehouse_id', '=', $data->warehouse_id)->first();

        $stock = Stock::find($find_stock->id);
        $stock->stock_on_hand += $data->qty;
        $stock->stock_on_location += $data->qty;
        $stock->update();
        return $this->crud->delete($id);
    }
}
