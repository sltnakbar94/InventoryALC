<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReportItemRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ReportItemCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ReportItemCrudController extends CrudController
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
        CRUD::setModel(\App\Models\ReportItem::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/reportitem');
        CRUD::setEntityNameStrings('Report Item', 'Report Item');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->removeButton('create');
        $this->crud->removeButton('update');
        $this->crud->removeButton('delete');
        $this->crud->removeButton('show');

        $this->crud->addColumn([
            'name' => 'invoice_id',
            'type' => 'select',
            'entity' => 'invoice',
            'attribute' => 'invoice_no',
            'model' => 'App\Models\Invoice',
            'label' => 'Invoice Number'
        ]);

        $this->crud->addColumn([
            'label'    => 'Nomor DO',
            'type'     => 'closure',
            'function' => function($entry) {
                if (!empty($entry->invoice->dn->WarehouseOut->do_number)) {
                    return $entry->invoice->dn->WarehouseOut->do_number;
                } else {
                    return "-";
                }
            }
        ]);

        $this->crud->addColumn([
            'name' => 'item_id',
            'type' => 'select',
            'entity' => 'item',
            'attribute' => 'name',
            'model' => 'App\Models\Item',
            'label' => 'Item'
        ]);

        $this->crud->addColumn([
            'name' => 'qty',
            'label'    => 'Quantity (karung)',
            'type'     => 'closure',
            'function' => function($entry) {
                return number_format($entry->qty)." Karung";
            }
        ]);

        $this->crud->addColumn([
            'name' => 'price',
            'label'    => 'Harga/KG',
            'type'     => 'closure',
            'function' => function($entry) {
                return "Rp. ".number_format($entry->price);
            }
        ]);

        $this->crud->addColumn([
            'name' => 'price',
            'type' => 'number',
            'label' => 'Harga/KG'
        ]);

        $this->crud->addColumn([
            'name' => 'price_sum',
            'label'    => 'Sub Total',
            'type'     => 'closure',
            'function' => function($entry) {
                return "Rp. ".number_format($entry->price_sum);
            }
        ]);

        $this->crud->addColumn([
            'name' => 'discount',
            'label'    => 'Diskon',
            'type'     => 'closure',
            'function' => function($entry) {
                return number_format($entry->discount)."%";
            }
        ]);

        $this->crud->addColumn([
            'name' => 'price_after_discount',
            'label'    => 'Harga Setelah Diskon',
            'type'     => 'closure',
            'function' => function($entry) {
                return "Rp. ".number_format($entry->price_after_discount);
            }
        ]);

        $this->crud->addColumn([
            'label'    => 'Customer',
            'type'     => 'closure',
            'function' => function($entry) {
                if (!empty($entry->invoice->dn->WarehouseOut->pic_customer)) {
                    return $entry->invoice->dn->WarehouseOut->pic_customer;
                } else {
                    return "-";
                }
            }
        ]);

        $this->crud->addColumn([
            'label'    => 'Sales',
            'type'     => 'closure',
            'function' => function($entry) {
                if (!empty($entry->invoice->dn->WarehouseOut->user->name)) {
                    return $entry->invoice->dn->WarehouseOut->user->name;
                } else {
                    return "-";
                }
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
        CRUD::setValidation(ReportItemRequest::class);

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
