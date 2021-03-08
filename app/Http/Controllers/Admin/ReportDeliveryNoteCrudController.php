<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReportDeliveryNoteRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\DeliveryNote;

/**
 * Class ReportDeliveryNoteCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ReportDeliveryNoteCrudController extends CrudController
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
        CRUD::setModel(\App\Models\DeliveryNote::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/reportdeliverynote');
        CRUD::setEntityNameStrings('Report Delivery Note', 'Report Delivery Note');
        $this->crud->setShowView('warehouse.dn.show');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        if (backpack_user()->hasAnyRole(['sales','purchasing','operator-gudang'])) {
            $this->crud->addClause('where', 'user_id', '=', backpack_auth()->id());
            }
            $this->crud->addClause('where', 'status', '>', 2);
            $this->crud->removeButton('create');
            $this->crud->removeButton('update');
            $this->crud->removeButton('delete');

            $this->crud->addColumn([
                'name' => 'dn_number',
                'type' => 'text',
                'label' => 'Nomor Surat Jalan'
            ]);

            $this->crud->addColumn([
                'name' => 'reference',
                'type' => 'select',
                'entity' => 'warehouseOut',
                'attribute' => 'do_number',
                'model' => 'App\Models\WarehouseOut',
                'label' => 'Nomor DO'
            ]);

            $this->crud->addColumn([
                'name' => 'dn_date',
                'type' => 'date',
                'label' => 'Tanggal Delivery Note'
            ]);

            $this->crud->addColumn([
                'name' => 'expedition',
                'type' => 'select',
                'entity' => 'warehouseOut',
                'attribute' => 'expedition',
                'model' => 'App\Models\WarehouseOut',
                'label' => 'Ekspedisi'
            ]);

            $this->crud->addColumn([
                'name' => 'etd',
                'type' => 'date',
                'label' => 'Estimasi Keberangkatan'
            ]);

            $this->crud->addColumn([
                'name'  => 'status',
                'label' => 'Status',
                'type'  => 'select_from_array',
                // optionally override the Yes/No texts
                'options' => [0 => 'Plan', 1 => 'Submited', 2 => 'Process', 3 => 'Denied', 4 => 'Completed']
            ]);

            $this->crud->addColumn([
                'name' => 'description',
                'type' => 'text',
                'label' => 'Catatan'
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
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ReportDeliveryNoteRequest::class);

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
}
