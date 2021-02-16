<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\Item;
use App\Models\Customer;
use App\Models\WarehouseOut;
use Illuminate\Support\Facades\DB;
use App\Models\BagItemWarehouseOut;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\WarehouseOutRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\Company;
use App\Services\GlobalServices;

/**
 * Class WarehouseOutCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class WarehouseOutCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation { show as traitShow; }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\WarehouseOut::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/warehouseout');
        CRUD::setEntityNameStrings('Barang Keluar', 'Barang Keluar');
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
            'name' => 'customer_id',
            'type' => 'select',
            'entity' => 'customer',
            'attribute' => 'name',
            'model' => 'App\Models\Customer',
            'label' => 'Customer'
        ]);

        $this->crud->addColumn([
            'name' => 'destination',
            'type' => 'text',
            'label' => 'Tujuan Pengiriman'
        ]);

        $this->crud->addColumn([
            'name' => 'date_out',
            'type' => 'date',
            'label' => 'Tanggal Pengiriman'
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

        $count = WarehouseOut::withTrashed()->whereDate('created_at', date('Y-m-d'))->count()+1;
        $number = str_pad($count + 1,3,"0",STR_PAD_LEFT);

        $generate = $month.$day."-".$number."/WHO-DO/".$year;

        return $generate;
    }
    protected function setupCreateOperation()
    {
        CRUD::setValidation(WarehouseOutRequest::class);

        $this->crud->addField([
            'label' => "Nomor Surat Jalan",
            'name'  => "delivery_note",
            'type'  => 'text',
            'value' => $this->generateNomorPengiriman()
        ]);

        $this->crud->addField([
            'name' => 'customer_id',
            'label' => 'Customer',
            'type' => 'select_from_array',
            'options' => Customer::pluck('name', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'destination',
            'label' => 'Tujuan',
            'type' => 'address_algolia',
        ]);

        $this->crud->addField([
            'name' => 'date_out',
            'label' => 'Tanggal Keluar',
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
        $this->crud->setShowView('warehouse.out.show');
    }

    public function show($id)
    {
        $globalService = new GlobalServices;
        $content = $this->traitShow($id);
        $content['data'] = WarehouseOut::findOrFail($id)->with('customer')->first();

        //Check if Flag There's No Submit
        $bagItemOnWarehouseOut = BagItemWarehouseOut::where('warehouse_outs_id', $id)->get();
        $checkApprovalByWarehouseID = $globalService->CheckingOnArray($bagItemOnWarehouseOut, 'submit');

        $this->crud->addField([
            'name' => 'warehouse_out',
            'data' => $content['data']
        ]);

        $this->crud->addField([
            'name' => 'items',
            'data' => Item::all(),
        ]);

        $this->crud->addField([
            'name' => 'items_on-bag',
            'data' => BagItemWarehouseOut::all(),
        ]);

        $this->crud->addField([
            'name' => 'flag_approval',
            'data' => $checkApprovalByWarehouseID
        ]);
        return $content;
    }

}
