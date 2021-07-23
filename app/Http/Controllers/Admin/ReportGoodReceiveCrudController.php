<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReportGoodReceiveRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ReportGoodReceiveCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ReportGoodReceiveCrudController extends CrudController
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
        CRUD::setModel(\App\Models\ReportGoodReceive::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/reportgoodreceive');
        CRUD::setEntityNameStrings('reportgoodreceive', 'report_good_receives');
        $this->crud->setShowView('warehouse.goodreceive.show');
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

        $this->crud->addColumn([
            'label' => "Nomor Surat jalan",
            'name'  => "dn_number",
            'type'  => 'text',
        ]);

        $this->crud->addColumn([
            'label' => 'Tanggal Surat Jalan',
            'name'  => 'dn_date',
            'type'  => 'text',
        ]);

        $this->crud->addColumn([
            'label' => "Nomor DO",
            'name'  => "do_number",
            'type'  => 'text',
        ]);

        $this->crud->addColumn([
            'label' => "Nomor PO",
            'name'  => "po_number",
            'type'  => 'text',
        ]);

        $this->crud->addColumn([
            'label' => "Nama Pengirim",
            'name'  => "sender",
            'type'  => 'text',
        ]);

        $this->crud->addColumn([
            'label' => "Alamat Pengirim",
            'name'  => "sender_address",
            'type'  => 'text',
        ]);

        $this->crud->addColumn([
            'label' => "Nama Penerima",
            'name'  => "consignee",
            'type'  => 'text',
        ]);

        $this->crud->addColumn([
            'name' => 'company_id',
            'type' => 'select',
            'entity' => 'company',
            'attribute' => 'name',
            'model' => 'App\Models\Company',
            'label' => 'Nama Perusahaan'
        ]);

        $this->crud->addColumn([
            'label' => "Nama Project",
            'name'  => "project_name",
            'type'  => 'text',
        ]);

        $this->crud->addColumn([
            'label' => "Nama Ekspedisi",
            'name'  => "expedition",
            'type'  => 'text',
        ]);

        $this->crud->addColumn([
            'name' => 'plat_number',
            'label' => 'Plat Nomor Kendaraan',
            'type' => 'text',
        ]);

        $this->crud->addColumn([
            'name' => 'driver',
            'label' => 'Nama Pengemudi',
            'type' => 'text',
        ]);

        $this->crud->addColumn([
            'name' => 'driver_phone',
            'label' => 'No Kontak Pengemudi',
            'type' => 'text',
        ]);

        $this->crud->addColumn([
            'name' => 'user_id',
            'type' => 'select',
            'entity' => 'user',
            'attribute' => 'name',
            'model' => 'App\Models\User',
            'label' => 'Operator'
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
        CRUD::setValidation(ReportGoodReceiveRequest::class);

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
