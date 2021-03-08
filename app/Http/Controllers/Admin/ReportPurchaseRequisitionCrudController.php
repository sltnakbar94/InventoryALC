<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReportPurchaseRequisitionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\SubmissionForm;

/**
 * Class ReportPurchaseRequisitionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ReportPurchaseRequisitionCrudController extends CrudController
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
        CRUD::setModel(\App\Models\SubmissionForm::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/reportpurchaserequisition');
        CRUD::setEntityNameStrings('Report Purchase Requisition', 'Report Purchase Requisitions');
        $this->crud->setShowView('warehouse.sf.show');
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
                'name' => 'form_number',
                'type' => 'text',
                'label' => 'Nomor Purchase Requisition'
            ]);

            $this->crud->addColumn([
                'name' => 'form_date',
                'type' => 'date',
                'label' => 'Tanggal Pengajuan'
            ]);

            $this->crud->addColumn([
                'name' => 'ref_no',
                'type' => 'text',
                'label' => 'Nomor Referensi'
            ]);

            $this->crud->addColumn([
                'name'  => 'project_id',
                'label' => 'Peruntukan',
                'type'  => 'select_from_array',
                // optionally override the Yes/No texts
                'options' => [1 => 'Stock', 2 => 'Proyek']
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
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ReportPurchaseRequisitionRequest::class);

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
