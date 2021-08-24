<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReportInvoiceRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ReportInvoiceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ReportInvoiceCrudController extends CrudController
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
        CRUD::setModel(\App\Models\ReportInvoice::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/reportinvoice');
        CRUD::setEntityNameStrings('Report Invoice Lunas', 'Report Invoice Lunas');
        $this->crud->setShowView('warehouse.invoice.report');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addClause('where', 'lunas', '=', 1);
        $this->crud->removeButton('create');
        $this->crud->removeButton('update');
        $this->crud->removeButton('delete');

        // daterange filter
        $this->crud->addFilter([
            'type'  => 'date_range',
            'name'  => 'from_to',
            'label' => 'Date range'
        ],
        false,
        function ($value) { // if the filter is active, apply these constraints
            $dates = json_decode($value);
            $this->crud->addClause('where', 'invoice_date', '>=', $dates->from);
            $this->crud->addClause('where', 'invoice_date', '<=', $dates->to . ' 23:59:59');
        });

        $this->crud->addColumn([
            'label'    => 'Gudang',
            'type'     => 'closure',
            'function' => function($entry) {
                return $entry->dn->WarehouseOut->warehouse->name;
            }
        ]);

        $this->crud->addColumn([
            'name' => 'invoice_no',
            'type' => 'text',
            'label' => 'Invoice Number'
        ]);

        $this->crud->addColumn([
            'name' => 'invoice_date',
            'type' => 'date',
            'label' => 'Invoice Date'
        ]);

        $this->crud->addColumn([
            'name' => 'invoice_value',
            'label'    => 'Nilai Invoice',
            'type'     => 'closure',
            'function' => function($entry) {
                return "Rp.".number_format($entry->invoice_value, 2);
            }
        ]);

        $this->crud->addColumn([
            'label'    => 'Customer',
            'type'     => 'closure',
            'function' => function($entry) {
                return $entry->dn->WarehouseOut->pic_customer;
            }
        ]);
        // dd($this->crud->query->first()->dn->WarehouseOut->warehouse_id);

        $this->crud->addColumn([
            'label'    => 'Sales',
            'type'     => 'closure',
            'function' => function($entry) {
                return $entry->dn->WarehouseOut->user->name;
            }
        ]);

        $this->crud->enableExportButtons();

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
        CRUD::setValidation(ReportInvoiceRequest::class);

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
