<?php

namespace App\Http\Controllers\Admin;

use App\Flag;
use App\Http\Requests\SalesOrderRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\Stackholder;
use App\Models\SalesOrder;
use App\Models\SalesOrderDetail;
use App\Models\SubmissionForm;
use App\Models\SubmissionFormDetail;
use Illuminate\Http\Request;
use PDF;

/**
 * Class SalesOrderCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SalesOrderCrudController extends CrudController
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
        CRUD::setModel(\App\Models\SalesOrder::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/salesorder');
        CRUD::setEntityNameStrings('Sales Order', 'Sales Orders');
        $this->crud->setShowView('warehouse.so.show');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        if (backpack_user()->hasRole('sales')) {
            $this->crud->addClause('where', 'user_id', '=', backpack_auth()->id());
            $this->crud->addClause('where', 'status', '!=', 4);
            $this->crud->addClause('where', 'status', '!=', 3);
        }
        if (backpack_user()->hasRole('purchasing')) {
            $this->crud->addClause('where', 'status', '=', 1);
            $this->crud->removeButton('create');
            $this->crud->removeButton('update');
            $this->crud->removeButton('delete');
        }

        $this->crud->addColumn([
            'name' => 'so_number',
            'type' => 'text',
            'label' => 'Nomor SO'
        ]);

        $this->crud->addColumn([
            'name' => 'supplier_id',
            'type' => 'select',
            'entity' => 'supplier',
            'attribute' => 'company',
            'model' => 'App\Models\Stackholder',
            'label' => 'Supplier'
        ]);

        $this->crud->addColumn([
            'name' => 'customer_id',
            'type' => 'select',
            'entity' => 'customer',
            'attribute' => 'company',
            'model' => 'App\Models\Stackholder',
            'label' => 'Customer'
        ]);

        $this->crud->addColumn([
            'name' => 'so_date',
            'type' => 'date',
            'label' => 'Tanggal Masuk'
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

        $count = SalesOrder::withTrashed()->whereDate('created_at', date('Y-m-d'))->count();
        $number = str_pad($count + 1,3,"0",STR_PAD_LEFT);

        $generate = $month.$day."-".$number."/WHI-SO/".$year;

        return $number;
        return $generate;
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(SalesOrderRequest::class);
        $this->crud->removeSaveActions(['save_and_back','save_and_edit','save_and_new']);

        $this->crud->addField([
            'label' => "Nomor SO",
            'name'  => "so_number",
            'type'  => 'text',
            'value' => $this->generateNomorPengiriman(),
            'attributes' => [
                'readonly'    => 'readonly',
            ]
        ]);

        $this->crud->addField([
            'name' => 'so_date',
            'label' => 'Tanggal SO',
            'type' => 'date_picker',
        ]);

        $this->crud->addField([   // SelectMultiple = n-n relationship (with pivot table)
            'label'     => "Pilih Purchase Requisition",
            'type'      => 'select2_multiple',
            'name'      => 'purchaseRequisition', // the method that defines the relationship in your Model
            'pivot'     => true,
            'entity'    => 'purchaseRequisition',
            'attribute' => 'form_number',
            'model'     => 'App\Models\SubmissionForm',
            'options'   => (function ($query) {
                return $query->where('project_id', '=', 2)->where('status', '=', 0)->get();
            }),
        ]);

        $this->crud->addField([
            'name' => 'perusahaan',
            'label' => 'Nama Perusahaan',
            'type' => 'text',
        ]);


        $this->crud->addField([
            'name' => 'supplier_id',
            'label' => 'Supplier',
            'type' => 'select2_from_array',
            'options' => Stackholder::whereHas('stackholderRole', function ($query) {
                return $query->where('name', '=', 'supplier');
            })->pluck('company', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'customer_id',
            'label' => 'Customer',
            'type' => 'select2_from_array',
            'options' => Stackholder::whereHas('stackholderRole', function ($query) {
                return $query->where('name', '=', 'customer');
            })->pluck('company', 'id'),
            'allows_null' => true,
        ]);


        $this->crud->addField([
            'name' => 'ref_no',
            'label' => 'Nomor Referensi',
            'type' => 'text',
            'attributes' => [
                'placeholder' => 'Contoh : Nomor Surat Penawaran Harga',
            ],
        ]);

        $this->crud->addField([
            'name' => 'ppn',
            'label' => 'PPN (10%)',
            'type' => 'boolean',
            'hint' => 'Bila supplier belum PKP maka tidak Pakai PPN',
        ]);

        $this->crud->addField([   // Upload
            'name'      => 'uploadref',
            'label'     => 'Upload Referensi',
            'type'      => 'upload',
            'upload'    => true,
            'disk'      => 'public', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
        ]);

        $this->crud->addField([
            'name' => 'term_of_paymnet',
            'label' => 'Term of Payment',
            'type' => 'textarea',
        ]);

        $this->crud->addField([
            'name' => 'destination',
            'label' => 'Alamat Tujuan',
            'type' => 'textarea',
        ]);

        $this->crud->addField([
            'name' => 'description',
            'label' => 'Keterangan',
            'type' => 'textarea',
        ]);

        $this->crud->addField([   // date_range
            'name'  => ['start_date', 'end_date'], // db columns for start_date & end_date
            'label' => 'Estimasi Tanggal Mulai dan Akhir SO',
            'type'  => 'date_range',
        ]);

        $this->crud->addField([
            'name' => 'user_id',
            'type' => 'hidden',
            'value' => backpack_auth()->id()
        ]);

        $this->crud->addField([
            'name' => 'company_id',
            'type' => 'hidden',
            'value' => backpack_auth()->user()->company_id
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
        $this->crud->removeSaveActions(['save_and_back','save_and_edit','save_and_new']);

        $this->crud->addField([
            'label' => "Nomor SO",
            'name'  => "so_number",
            'type'  => 'text',
            'attributes' => [
                'readonly'    => 'readonly',
            ]
        ]);

        $this->crud->addField([
            'name' => 'so_date',
            'label' => 'Tanggal SO',
            'type' => 'date_picker',
        ]);

        $this->crud->addField([   // SelectMultiple = n-n relationship (with pivot table)
            'label'     => "Pilih Purchase Requisition",
            'type'      => 'select2_multiple',
            'name'      => 'purchaseRequisition', // the method that defines the relationship in your Model
            'pivot'     => true,
            'entity'    => 'purchaseRequisition',
            'attribute' => 'form_number',
            'model'     => 'App\Models\SubmissionForm',
            'options'   => (function ($query) {
                return $query->where('project_id', '=', 2)->where('status', '=', 0)->get();
            }),
        ]);

        $this->crud->addField([
            'name' => 'supplier_id',
            'label' => 'Supplier',
            'type' => 'select2_from_array',
            'options' => Stackholder::whereHas('stackholderRole', function ($query) {
                return $query->where('name', '=', 'supplier');
            })->pluck('company', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'customer_id',
            'label' => 'Customer',
            'type' => 'select2_from_array',
            'options' => Stackholder::whereHas('stackholderRole', function ($query) {
                return $query->where('name', '=', 'customer');
            })->pluck('company', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'ref_no',
            'label' => 'Nomor Referensi',
            'type' => 'text',
            'attributes' => [
                'placeholder' => 'Contoh : Nomor Surat Penawaran Harga',
              ],
        ]);

        $this->crud->addField([
            'name' => 'ppn',
            'label' => 'PPN (10%)',
            'type' => 'boolean',
            'hint' => 'Bila supplier belum PKP maka tidak Pakai PPN',
        ]);

        $this->crud->addField([   // Upload
            'name'      => 'uploadref',
            'label'     => 'Upload Referensi',
            'type'      => 'upload',
            'upload'    => true,
            'disk'      => 'public', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
        ]);

        $this->crud->addField([
            'name' => 'term_of_paymnet',
            'label' => 'Term of Payment',
            'type' => 'textarea',
        ]);

        $this->crud->addField([
            'name' => 'destination',
            'label' => 'Alamat Tujuan',
            'type' => 'textarea',
        ]);

        $this->crud->addField([
            'name' => 'description',
            'label' => 'Keterangan',
            'type' => 'textarea',
        ]);

        $this->crud->addField([   // date_range
            'name'  => ['start_date', 'end_date'], // db columns for start_date & end_date
            'label' => 'Estimasi Tanggal Mulai dan Akhir SO',
            'type'  => 'date_range',
        ]);

        $this->crud->addField([
            'name' => 'user_id',
            'type' => 'hidden',
            'value' => backpack_auth()->id()
        ]);

        $this->crud->addField([
            'name' => 'company_id',
            'type' => 'hidden',
            'value' => backpack_auth()->user()->company_id
        ]);
    }

    public function storePic(Request $request)
    {
        if ($request->type == "customer") {
            $data = SalesOrder::findOrFail($request->id);
            $data->pic_customer = $request->pic;
        }
        if ($request->type == "supplier") {
            $data = SalesOrder::findOrFail($request->id);
            $data->pic_supplier = $request->pic;
        }
        $data->update();

        \Alert::add('success', 'Berhasil tambah pic ' . $request->pic)->flash();
       return redirect()->back();
    }

    public function pdf(Request $request)
    {
        $sum = SalesOrderDetail::sum('sub_total');
        $data = SalesOrder::findOrFail($request->id);

        $pdf = PDF::loadview('warehouse.so.output',['data'=>$data, 'sum'=>$sum]);
    	return $pdf->stream($data->so_number.'.pdf');
    }

    public function store(Request $request)
    {

        $count = SalesOrder::withTrashed()->whereDate('so_date', date($request->so_number))->count();
        $number = str_pad($count + 1,3,"0",STR_PAD_LEFT);
        $day = date('d', strtotime($request->so_date));
        $month = date('m', strtotime($request->so_date));
        $year = date('Y', strtotime($request->so_date));
        $nomor = $month.$day."-".$number."/".$request->perusahaan."-SO/".$year;
        $data = new SalesOrder();
        $data->so_number = $nomor;
        $data->so_date = $request->so_date;
        $data->supplier_id = $request->supplier_id ;
        $data->customer_id = $request->customer_id;
        $data->ppn = $request->ppn ;
        $data->term_of_paymnet = $request->term_of_paymnet ;
        $data->destination = $request->destination;
        $data->ref_no = $request->ref_no;
        $data->description = $request->description;
        $data->user_id = $request->user_id;
        $data->company_id = $request->company_id;
        if($request->hasFile('uploadref')) {
            $file = $request->file('uploadref');
            $path = $file->storeAs('sales_order/uploadref', $month.$day.'-'.$number.'-'.$request->perusahaan.'-SO-'.$year. '.' . $file->getClientOriginalExtension() , 'public');
            $data->uploadref = $path;
        }
        $data->save();
        $cari = SalesOrder::where('so_number' , '=' , $nomor)->first();
        return redirect(backpack_url('salesorder/'.$cari->id.'/show'));
    }

    public function update(Request $request)
    {
        $count = SalesOrder::withTrashed()->whereDate('so_date', date($request->so_number))->count();
        $number = str_pad($count + 1,3,"0",STR_PAD_LEFT);
        $day = date('d', strtotime($request->so_date));
        $month = date('m', strtotime($request->so_date));
        $year = date('Y', strtotime($request->so_date));
        $nomor = $month.$day."-".$number."/".$request->perusahaan."-SO/".$year;
        $data = new SalesOrder();
        $data->so_number = $nomor;
        $data->so_date = $request->so_date;
        $data->supplier_id = $request->supplier_id ;
        $data->customer_id = $request->customer_id;
        $data->ppn = $request->ppn ;
        $data->term_of_paymnet = $request->term_of_paymnet ;
        $data->destination = $request->destination;
        $data->ref_no = $request->ref_no;
        $data->description = $request->description;
        $data->user_id = $request->user_id;
        $data->company_id = $request->company_id;
        if($request->hasFile('uploadref')) {
            $file = $request->file('uploadref');
            $path = $file->storeAs('sales_order/uploadref', $month.$day.'-'.$number.'-'.$request->perusahaan.'-SO-'.$year. '.' . $file->getClientOriginalExtension() , 'public');
            $data->uploadref = $path;
        }
        $data->save();
        $cari = SalesOrder::where('so_number' , '=' , $nomor)->first();
        return redirect(backpack_url('salesorder/'.$cari->id.'/show'));
    }


    public function dn(Request $request)
    {
        return redirect()->route('generate_delivery-note', [$request->id]);

    }

    public function process(Request $request)
    {
        $header = SalesOrder::findOrFail($request->id);
        $header->status = Flag::SUBMITED;
        $details = SalesOrderDetail::where('sales_order_id', '=', $request->id)->get();
        $header_pr = $header->purchaseRequisition;
        $pr_detail_id = collect($header_pr->toArray())->all();
        $pr_details = SubmissionFormDetail::whereIn('submission_form_id', array_column($pr_detail_id, 'id'))->get();
        foreach ($details as $detail) {
            $update = SalesOrderDetail::findOrFail($detail->id);
            $update->status = Flag::SUBMITED;
            $update->update();
        }
        foreach ($header_pr as $prerequisition) {
            $head_pr = SubmissionForm::findOrFail($prerequisition->id);
            $head_pr->status = Flag::SUBMITED;
            $head_pr->update();
        }
        foreach ($pr_details as $pr_detail) {
            $detail_pr = SubmissionFormDetail::findOrFail($pr_detail->id);
            $detail_pr->status = Flag::SUBMITED;
            $detail_pr->update();
        }
        $header->grand_total = $details->sum('sub_total');
        $header->update();

        \Alert::add('success', 'Berhasil submit ' . $header->so_number)->flash();
        return redirect()->back();
    }

    public function acceptHeader(Request $request)
    {
        $header = SalesOrder::findOrFail($request->id);
        $header->status = Flag::PROCESS;
        $details = SalesOrderDetail::where('sales_order_id', '=', $request->id)->get();
        $header_pr = $header->purchaseRequisition;
        $pr_detail_id = collect($header_pr->toArray())->all();
        $pr_details = SubmissionFormDetail::whereIn('submission_form_id', array_column($pr_detail_id, 'id'))->get();
        foreach ($details as $detail) {
            $update = SalesOrderDetail::findOrFail($detail->id);
            $update->status = Flag::PROCESS;
            $update->update();
        }
        foreach ($header_pr as $prerequisition) {
            $head_pr = SubmissionForm::findOrFail($prerequisition->id);
            $head_pr->status = Flag::PROCESS;
            $head_pr->update();
        }
        foreach ($pr_details as $pr_detail) {
            $detail_pr = SubmissionFormDetail::findOrFail($pr_detail->id);
            $detail_pr->status = Flag::PROCESS;
            $detail_pr->update();
        }
        $header->grand_total = $details->sum('sub_total');
        $header->update();

        \Alert::add('success', 'Berhasil memproses ' . $header->so_number)->flash();
        return redirect()->back();
    }

    public function deniedHeader(Request $request)
    {
       $header = SalesOrder::withoutTrashed()->whereDate('form_date' , date($request->form_date))->count();
        $header->status = Flag::DENIED;
        $details = SalesOrderDetail::where('sales_order_id', '=', $request->id)->get();
        $header_pr = $header->purchaseRequisition;
        $pr_detail_id = collect($header_pr->toArray())->all();
        $pr_details = SubmissionFormDetail::whereIn('submission_form_id', array_column($pr_detail_id, 'id'))->get();
        foreach ($details as $detail) {
            $update = SalesOrderDetail::findOrFail($detail->id);
            $update->status = Flag::DENIED;
            $update->update();
        }
        foreach ($header_pr as $prerequisition) {
            $head_pr = SubmissionForm::findOrFail($prerequisition->id);
            $head_pr->status = Flag::PLAN;
            $head_pr->update();
        }
        foreach ($pr_details as $pr_detail) {
            $detail_pr = SubmissionFormDetail::findOrFail($pr_detail->id);
            $detail_pr->status = Flag::PLAN;
            $detail_pr->update();
        }
        $header->grand_total = $details->sum('sub_total');
        $header->update();

        \Alert::add('danger', 'Berhasil membatalkan ' . $header->so_number)->flash();
        return redirect()->back();
    }
}
