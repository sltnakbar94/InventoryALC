<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InvoiceRequest;
use App\Models\DeliveryNote;
use App\Models\Invoice;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class InvoiceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class InvoiceCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Invoice::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/invoice');
        CRUD::setEntityNameStrings('invoice', 'invoices');
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

        $this->crud->addColumn([
            'name' => 'invoice_no',
            'type' => 'text',
            'label' => 'Invoice Number'
        ]);

        $this->crud->addColumn([
            'name' => 'dn_number',
            'type' => 'text',
            'label' => 'Delivery Note Number'
        ]);

        $this->crud->addColumn([
            'name' => 'invoice_date',
            'type' => 'text',
            'label' => 'Invoice Date'
        ]);

        $this->crud->addColumn([
            'name' => 'user',
            'type' => 'text',
            'label'=> 'User who generate'
        ]);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }


    public function generateInvoiceNumber()
    {
        $day = date("d");
        $month = date("m");
        $year = date("Y");

        $count = DB::table('invoice')->count();
        $number = str_pad($count + 1,3,"0",STR_PAD_LEFT);

        $generate = $month.$day."-".$number."/WHO-IN/".$year;

        return $generate ;
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(InvoiceRequest::class);

        $this->crud->addField([
            'label' => "Invoice Number",
            'name'  => "invoice_no",
            'type'  => 'hidden' ,
            'value' => $this->generateInvoiceNumber(),
            'attributes' => [
                'readonly'    => 'readonly',
            ]
        ]);

        $this->crud->addField([   
            'label' => 'Pilih Surat Jalan',
            'type'  => 'select2_from_array',
            'name'  => 'dn_number',
            'options' => DeliveryNote::where('status', '=', 4)->pluck('dn_number', 'id'),
            'allows_null' => false
        ]);

        $this->crud->addField([
            'name' => 'invoice_date',
            'type' => 'date',
            'label' => 'Invoice Date'
        ]);

        $this->crud->addField([
            'name' => 'ppn',
            'type' => 'number',
            'label' => 'PPN'
        ]);

        $this->crud->addField([
            'name' => 'user',
            'type' => 'hidden',
            'label'=> 'User who generate'
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


    public function store(Request $request)
    {
       
        $cari = Invoice::where('dn_number' , '=' , $request->dn_number)->first();
        dd($cari);
        return redirect(backpack_url('warehouseout/'.$cari->id.'/show'));
    }


    public function pdf(Request $request)
    {
        $data = DeliveryNote::findOrFail($request->dn_number);

        $pdf = PDF::loadview('warehouse.invoice.output',['data'=>$data]);
    	return $pdf->stream($data->invoice_no.'.pdf');
    }
}
