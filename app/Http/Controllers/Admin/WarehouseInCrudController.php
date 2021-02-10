<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\WarehouseInRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\Supplier;
use App\Models\WarehouseIn;
use Illuminate\Support\Facades\Auth;

/**
 * Class WarehouseInCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class WarehouseInCrudController extends CrudController
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
        CRUD::setModel(\App\Models\WarehouseIn::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/warehousein');
        CRUD::setEntityNameStrings('Barang Masuk', 'Barang Masuk');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'delivery_note',
            'type' => 'text',
            'label' => 'Nomor Surat Jalan'
        ]);

        $this->crud->addColumn([
            'name' => 'supplier_id',
            'type' => 'select',
            'entity' => 'supplier',
            'attribute' => 'name',
            'model' => 'App\Models\Supplier',
            'label' => 'Supplier'
        ]);

        $this->crud->addColumn([
            'name' => 'date_in',
            'type' => 'date',
            'label' => 'Tanggal Masuk'
        ]);

        $this->crud->addColumn([
            'name' => 'description',
            'type' => 'textarea',
            'label' => 'Keterangan'
        ]);

        $this->crud->addColumn([
            'name' => 'user_id',
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
    public function generateNomorPengiriman()
    {
        $day = date("d");
        $month = date("m");
        $year = date("Y");

        $count = WarehouseIn::withTrashed()->whereDate('created_at', date('Y-m-d'))->count()+1;
        $number = str_pad($count + 1,3,"0",STR_PAD_LEFT);

        $generate = $month.$day."-".$number."/WHI-PO/".$year;

        return $generate;
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(WarehouseInRequest::class);

        $this->crud->addField([
            'label' => "Nomor Surat Jalan",
            'name'  => "delivery_note",
            'type'  => 'text',
            'value' => $this->generateNomorPengiriman()
        ]);

        $this->crud->addField([
            'name' => 'supplier_id',
            'label' => 'Supplier',
            'type' => 'select_from_array',
            'options' => Supplier::pluck('name', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'date_in',
            'label' => 'Tanggal Masuk',
            'type' => 'date_picker',
        ]);

        $this->crud->addField([
            'name' => 'description',
            'label' => 'Keterangan',
            'type' => 'textarea',
        ]);

        $this->crud->addField([
            'name' => 'user_id',
            'type' => 'hidden',
            'value' => backpack_auth()->id()
        ]);

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

    protected function setupShowOperation()
    {
        $this->crud->setShowView('warehouse.in.show');
    }
}
