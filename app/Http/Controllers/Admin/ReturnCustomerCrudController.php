<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReturnCustomerRequest;
use App\Models\Invoice;
use App\Models\ReturnCustomer;
use App\Models\ReturnCustomerDetail;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;

/**
 * Class ReturnCustomerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ReturnCustomerCrudController extends CrudController
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
        CRUD::setModel(\App\Models\ReturnCustomer::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/returncustomer');
        CRUD::setEntityNameStrings('Retur Barang Customer', 'Retur Barang Customer');
        $this->crud->setShowView('warehouse.return.show');
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
            'name' => 'invoice_id',
            'type' => 'select',
            'entity' => 'invoice',
            'attribute' => 'invoice_no',
            'model' => 'App\Models\Invoice',
            'label' => 'Invoice'
        ]);

        $this->crud->addColumn([
            'name' => 'delivery_note_id',
            'type' => 'select',
            'entity' => 'deliveryNote',
            'attribute' => 'dn_number',
            'model' => 'App\Models\DeliveryNote',
            'label' => 'Delivery Note'
        ]);

        $this->crud->addColumn([
            'name' => 'warehouse_out_id',
            'type' => 'select',
            'entity' => 'warehouseOut',
            'attribute' => 'do_number',
            'model' => 'App\Models\WarehouseOut',
            'label' => 'Delivery Order'
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
        CRUD::setValidation(ReturnCustomerRequest::class);

        $this->crud->addField([
            'label' => 'Pilih Invoice',
            'type'  => 'select2_from_array',
            'name'  => 'invoice_id',
            'options' => Invoice::pluck('invoice_no', 'id'),
            'allows_null' => true
        ]);

        $this->crud->addField([
            'name' => 'user_id',
            'type' => 'hidden',
            'label'=> 'User who generate',
            'value'=> backpack_auth()->id()
        ]);

        $this->crud->removeSaveActions(['save_and_back','save_and_edit','save_and_new']);

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
        $data = Invoice::find($request->invoice_id);
        $save = new ReturnCustomer();
        $save->invoice_id = $request->invoice_id;
        $save->delivery_note_id = $data->dn->id;
        $save->warehouse_out_id = $data->dn->WarehouseOut->id;
        $save->user_id = $request->user_id;
        $save->save();
        $find = ReturnCustomer::where('invoice_id', '=', $request->invoice_id)->orderBy('created_at', 'DESC')->first();
        foreach ($data->details as $value) {
            $detail = new ReturnCustomerDetail();
            $detail->return_customer_id = $find->id;
            $detail->invoice_detail_id = $value->id;
            $detail->item_id = $value->item_id;
            $detail->qty_before = $value->qty;
            $detail->save();
        }
        \Alert::add('success', 'Berhasil Menambah Data')->flash();
        return redirect(backpack_url('returncustomer/'.$find->id.'/show'));
    }
}
