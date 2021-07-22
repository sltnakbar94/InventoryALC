<?php

namespace App\Http\Controllers\Admin;

use App\Flag;
use App\Http\Requests\InvoiceRequest;
use App\Models\DeliveryNote;
use App\Models\DeliveryNoteDetail;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

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
        $this->crud->setShowView('warehouse.invoice.show');
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
            'name' => 'invoice_value',
            'label'    => 'Nilai Invoice',
            'type'     => 'closure',
            'function' => function($entry) {
                return "Rp.".number_format($entry->invoice_value, 2);
            }
        ]);

        $this->crud->addColumn([
            'name'  => 'lunas',
            'label' => 'Status',
            'type'  => 'boolean',
            // optionally override the Yes/No texts
            'options' => [0 => 'Belum Lunas', 1 => 'Lunas']
        ]);

        $this->crud->addColumn([
            'label'    => 'Customer',
            'type'     => 'closure',
            'function' => function($entry) {
                return $entry->dn->WarehouseOut->pic_customer;
            }
        ]);

        $this->crud->addColumn([
            'name' => 'user',
            'type' => 'select',
            'entity' => 'userid',
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


    public function generateInvoiceNumber()
    {
        $day = date("d");
        $month = date("m");
        $year = date("Y");

        $count = DB::table('invoice')->count();
        $number = $count+1;

        $generate = $month.$day."-0".$number."/Invoice/".$year;

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
            'type'  => 'text' ,
            'value' => $this->generateInvoiceNumber(),
            'attributes' => [
                'readonly'    => 'readonly',
            ]
        ]);

        $this->crud->addField([
            'label' => 'Pilih Surat Jalan',
            'type'  => 'select2_from_array',
            'name'  => 'dn_number',
            'options' => DeliveryNote::where('status', '=', 4)->whereNotIn('dn_number',function($query) {
                $query->select('dn_number')->from('invoice');
             })->pluck('dn_number', 'dn_number'),
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

        $this->crud->addField([   // repeatable
            'name'  => 'termin',
            'label' => 'Termin',
            'hint' => 'Hiraukan bila dibayar lunas',
            'type'  => 'repeatable',
            'fields' => [
                [
                    'name'    => 'termin_no',
                    'type'    => 'number',
                    'label'   => 'Nomor Termin',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'name'    => 'pay_of',
                    'type'    => 'number',
                    'label'   => 'Jumlah dibayarkan',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'name'    => 'due_date',
                    'type'    => 'date',
                    'label'   => 'Tanggal tenggang',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [   // radio
                    'name'        => 'pay_status', // the name of the db column
                    'label'       => 'Status Pembayaran', // the input label
                    'type'        => 'boolean',
                    'options'     => [
                        // the key will be stored in the db, the value will be shown as label;
                        0 => "Belum Lunas",
                        1 => "Lunas"
                    ],
                    // optional
                    //'inline'      => false, // show the radios all on the same line?
                ]
            ],
            'new_item_label'  => 'Tambah Termin', // customize the text of the button
            'init_rows' => 0, // number of empty rows to be initialized, by default 1
        ]);

        $this->crud->addField([   // radio
            'name'        => 'lunas', // the name of the db column
            'label'       => 'Pembayaran Lunas', // the input label
            'type'        => 'boolean',
            'options'     => [
                // the key will be stored in the db, the value will be shown as label;
                0 => "Belum Lunas",
                1 => "Lunas"
            ],
            // optional
            //'inline'      => false, // show the radios all on the same line?
        ]);

        $this->crud->addField([
            'name' => 'user',
            'type' => 'hidden',
            'label'=> 'User who generate',
            'value'=> backpack_auth()->id()
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
        $this->crud->addField([
            'label' => "Invoice Number",
            'name'  => "invoice_no",
            'type'  => 'text' ,
            'attributes' => [
                'readonly'    => 'readonly',
            ]
        ]);

        $this->crud->addField([
            'label' => 'Pilih Surat Jalan',
            'type'  => 'select2_from_array',
            'name'  => 'dn_number',
            'options' => DeliveryNote::where('status', '>', 0)->pluck('dn_number', 'dn_number'),
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

        $this->crud->addField([   // repeatable
            'name'  => 'termin',
            'label' => 'Termin',
            'hint' => 'Hiraukan bila dibayar lunas',
            'type'  => 'repeatable',
            'fields' => [
                [
                    'name'    => 'termin_no',
                    'type'    => 'number',
                    'label'   => 'Nomor Termin',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'name'    => 'pay_of',
                    'type'    => 'number',
                    'label'   => 'Jumlah dibayarkan',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'name'    => 'due_date',
                    'type'    => 'date',
                    'label'   => 'Tanggal tenggang',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [   // radio
                    'name'        => 'pay_status', // the name of the db column
                    'label'       => 'Status Pembayaran', // the input label
                    'type'        => 'boolean',
                    'options'     => [
                        // the key will be stored in the db, the value will be shown as label;
                        0 => "Belum Lunas",
                        1 => "Lunas"
                    ],
                    // optional
                    //'inline'      => false, // show the radios all on the same line?
                ]
            ],
            'new_item_label'  => 'Tambah Termin', // customize the text of the button
            'init_rows' => 0, // number of empty rows to be initialized, by default 1
        ]);

        $this->crud->addField([   // radio
            'name'        => 'lunas', // the name of the db column
            'label'       => 'Pembayaran Lunas', // the input label
            'type'        => 'boolean',
            'options'     => [
                // the key will be stored in the db, the value will be shown as label;
                0 => "Belum Lunas",
                1 => "Lunas"
            ],
            // optional
            //'inline'      => false, // show the radios all on the same line?
        ]);

        $this->crud->addField([
            'name' => 'user',
            'type' => 'hidden',
            'label'=> 'User who generate',
            'value'=> backpack_auth()->id()
        ]);
    }


    public function store(Request $request)
    {
        $invoice = new Invoice();
        $invoice->invoice_no = $request->invoice_no;
        $invoice->dn_number = $request->dn_number;
        $invoice->invoice_date = $request->invoice_date ;
        $invoice->ppn = $request->ppn;
        $invoice->termin = $request->termin;
        $invoice->user = $request->user;
        $invoice->save();
        $dn = DeliveryNote::where('dn_number' , '=' , $request->dn_number )->first();
        $dndetails = DeliveryNoteDetail::where('delivery_note_id' , '=' , $dn['id'])->get();
        foreach($dndetails as $item){
            $invdetails = new InvoiceDetail() ;
            $invdetails->invoice_id = $invoice->id;
            $invdetails->item_id = $item->item_id ;
            $invdetails->qty = $item->qty ;
            $invdetails->save();
        }
        $cari = Invoice::where('dn_number' , '=' , $request->dn_number)->first();
        $invdetails->invoice_id = $cari->id ;
        return redirect(backpack_url('invoice/'.$cari->id.'/show'));
    }

    public function pdf(Request $request)
    {
        $invoice = Invoice::findOrFail($request->id);
        $invoiceDetails = InvoiceDetail::where('invoice_id' , '=' , $request->id)->get();
        $invoice->invoice_value = $invoiceDetails->sum('price_after_discount');
        $invoice->update();
        $pay_of = $request->pay_of;
        $due_date = $request->due_date;
        $pdf = PDF::loadview('warehouse.invoice.output',
                             ['data' => $invoiceDetails ,
                             'pay_of' => $pay_of ,
                             'due_date' => $due_date ,
                             'invoice' => $invoice ]);
    	return $pdf->stream($invoice->invoice_no.'.pdf');
    }
}
