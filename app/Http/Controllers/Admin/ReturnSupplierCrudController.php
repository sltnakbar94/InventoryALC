<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReturnSupplierRequest;
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
        CRUD::setValidation(ReturnSupplierRequest::class);

        $this->crud->addField([   // date_picker
            'name'  => 'date',
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
            'label' => 'Nama Pengendara',
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
        dd($request->all());
    }
}
