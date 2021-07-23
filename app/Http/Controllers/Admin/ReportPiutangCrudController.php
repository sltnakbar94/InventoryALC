<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReportPiutangRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ReportPiutangCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ReportPiutangCrudController extends CrudController
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
        CRUD::setModel(\App\Models\ReportPiutang::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/reportpiutang');
        CRUD::setEntityNameStrings('Report Piutang', 'Report Piutang');
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
        $this->crud->addClause('where', 'lunas', '=', 0);
        $this->crud->removeButton('create');
        $this->crud->removeButton('update');
        $this->crud->removeButton('delete');

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
            'label'    => 'Sudah Dibayarkan',
            'type'     => 'closure',
            'function' => function($entry) {
                $termin = json_decode($entry->termin);
                $dibayarkan = 0;
                foreach ($termin as $key => $value) {
                    if ($value->pay_status == '1') {
                        $nilai_termin = (int)$value->pay_of;
                        $dibayarkan += $nilai_termin;
                    }
                }
                return "Rp.".number_format($dibayarkan, 2);
            }
        ]);

        $this->crud->addColumn([
            'label'    => 'Terhutang',
            'type'     => 'closure',
            'function' => function($entry) {
                $termin = json_decode($entry->termin);
                $dibayarkan = $entry->invoice_value;
                foreach ($termin as $key => $value) {
                    if ($value->pay_status == '1') {
                        $nilai_termin = (int)$value->pay_of;
                        $dibayarkan += $nilai_termin;
                    }
                }
                return "Rp.".number_format($dibayarkan, 2);
            }
        ]);

        $this->crud->addColumn([
            'label'    => 'Customer',
            'type'     => 'closure',
            'function' => function($entry) {
                return $entry->dn->WarehouseOut->pic_customer;
            }
        ]);

        $this->crud->addColumn([
            'label'    => 'Sales',
            'type'     => 'closure',
            'function' => function($entry) {
                return $entry->dn->WarehouseOut->user->name;
            }
        ]);

        $this->crud->addColumn([
            'name'  => 'termin',
            'label' => 'Termin',
            'type'  => 'table',
            'columns' => [
                'termin_no'        => 'Nomor',
                'pay_of' => 'Dibayarkan',
                'due_date'       => 'Tanggal Tenggang',
            ]
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
        CRUD::setValidation(ReportPiutangRequest::class);

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
