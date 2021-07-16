<?php

namespace App\Http\Controllers\Admin;

use App\Flag;
use App\Models\WarehouseOut;
use App\Services\GlobalServices;
use App\Http\Requests\DeliveryNoteRequest;
use App\Models\BagItemWarehouseOut;
use App\Models\Company;
use App\Models\DeliveryNote;
use App\Models\DeliveryNoteDetail;
use App\Models\Stock;
use App\Services\DeliveryNoteServices;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use PDF;
use Illuminate\Http\Request;

/**
 * Class DeliveryNoteCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DeliveryNoteCrudController extends CrudController
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
        CRUD::setModel(\App\Models\DeliveryNote::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/deliverynote');
        CRUD::setEntityNameStrings('Delivery Note', 'Delivery Note');
        $this->crud->setShowView('warehouse.dn.show');
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
        $this->crud->addClause('where', 'module', '=', 'delivery_order');
        $this->crud->addColumn([
            'name' => 'dn_number',
            'type' => 'text',
            'label' => 'Nomor Surat Jalan'
        ]);

        $this->crud->addColumn([
            'name' => 'reference',
            'type' => 'select',
            'entity' => 'warehouseOut',
            'attribute' => 'do_number',
            'model' => 'App\Models\WarehouseOut',
            'label' => 'Nomor DO'
        ]);

        $this->crud->addColumn([
            'name' => 'dn_date',
            'type' => 'date',
            'label' => 'Tanggal Delivery Note'
        ]);

        $this->crud->addColumn([
            'name' => 'expedition',
            'type' => 'select',
            'entity' => 'warehouseOut',
            'attribute' => 'expedition',
            'model' => 'App\Models\WarehouseOut',
            'label' => 'Ekspedisi'
        ]);

        $this->crud->addColumn([
            'name' => 'etd',
            'type' => 'date',
            'label' => 'Estimasi Keberangkatan'
        ]);

        $this->crud->addColumn([
            'name' => 'description',
            'type' => 'text',
            'label' => 'Catatan'
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

        $count = DeliveryNote::withTrashed()->whereDate('created_at', date('Y-m-d'))->count();
        $number = str_pad($count + 1,3,"0",STR_PAD_LEFT);

        $generate = $month.$day."-".$number."/WHO-SJ/".$year;

        return $number;
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(DeliveryNoteRequest::class);

        $this->crud->removeSaveActions(['save_and_back','save_and_edit','save_and_new']);

        $this->crud->addField([
            'label' => "Nomor Surat jalan",
            'name'  => "dn_number",
            'type'  => 'hidden',
            'value' => $this->generateNomorPengiriman(),
            'attributes' => [
                'readonly'    => 'disable',
            ]
        ]);

        $this->crud->addField([
            'name' => 'perusahaan',
            'label' => 'Nama Perusahaan',
            'type' => 'select2_from_array',
            'options' => Company::pluck('name', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'reference',
            'label' => 'Nomor DO',
            'type' => 'select2_from_array',
            'options' => WarehouseOut::where('status', '=', Flag::PROCESS)->pluck('do_number', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'dn_date',
            'label' => 'Tanggal Surat Jalan',
            'type' => 'date_picker',
        ]);

        $this->crud->addField([
            'name' => 'etd',
            'label' => 'Estimasi Keberangkatan',
            'type' => 'datetime_picker',
        ]);

        $this->crud->addField([
            'name' => 'plat_number',
            'label' => 'Plat Nomor Kendaraan',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'driver',
            'label' => 'Nama Pengemudi',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'driver_phone',
            'label' => 'No Kontak Pengemudi',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'module',
            'value' => 'delivery_order',
            'type' => 'hidden',
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
            'label' => "Nomor Surat jalan",
            'name'  => "dn_number",
            'type'  => 'hidden',
            'attributes' => [
                'readonly'    => 'disable',
            ]
        ]);

        $this->crud->addField([
            'name' => 'perusahaan',
            'label' => 'Nama Perusahaan',
            'type' => 'select2_from_array',
            'options' => Company::pluck('name', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'reference',
            'label' => 'Nomor DO',
            'type' => 'select2_from_array',
            'options' => WarehouseOut::pluck('do_number', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'dn_date',
            'label' => 'Tanggal Surat Jalan',
            'type' => 'date_picker',
        ]);

        $this->crud->addField([
            'name' => 'etd',
            'label' => 'Estimasi Keberangkatan',
            'type' => 'datetime_picker',
        ]);

        $this->crud->addField([
            'name' => 'plat_number',
            'label' => 'Plat Nomor Kendaraan',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'driver',
            'label' => 'Nama Pengemudi',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'driver_phone',
            'label' => 'No Kontak Pengemudi',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'module',
            'value' => 'delivery_order',
            'type' => 'hidden',
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

    public function store(Request $request)
    {
        $perusahaan = Company::find($request->perusahaan);
        $count = DeliveryNote::withTrashed()->whereDate('dn_date', date($request->dn_date))->count();
        $number = str_pad($count + 1,3,"0",STR_PAD_LEFT);
        $day = date('d', strtotime($request->dn_date));
        $month = date('m', strtotime($request->dn_date));
        $year = date('Y', strtotime($request->dn_date));
        $nomor = $month.$day."-".$number."/".$perusahaan->code."-DN/".$year;
        $data = new DeliveryNote();
        $data->dn_number = $nomor;
        $data->perusahaan = $request->perusahaan;
        $data->reference = $request->reference;
        $data->dn_date = $request->dn_date;
        $data->etd = $request->etd ;
        $data->plat_number = $request->plat_number;
        $data->driver = $request->driver ;
        $data->driver_phone = $request->driver_phone ;
        $data->module = $request->module ;
        $data->user_id = $request->user_id ;
        $data->company_id = $request->company_id ;
        $data->save();
        $cari = DeliveryNote::where('dn_number' , '=' , $nomor)->first();
        return redirect(backpack_url('deliverynote/'.$cari->id.'/show'));
    }

    public function update(Request $request)
    {
        $perusahaan = Company::find($request->perusahaan);
        $data = DeliveryNote::findOrFail($request->id);
        $number = substr($data->po_number,5,3);
        $day = date('d', strtotime($request->dn_date));
        $month = date('m', strtotime($request->dn_date));
        $year = date('Y', strtotime($request->dn_date));
        $nomor = $month.$day."-".$number."/".$perusahaan->code."-DN/".$year;
        $data->dn_number = $request->dn_number;
        $data->perusahaan = $request->perusahaan;
        $data->reference = $request->reference;
        $data->dn_date = $request->dn_date;
        $data->etd = $request->etd ;
        $data->plat_number = $request->plat_number;
        $data->driver = $request->driver ;
        $data->driver_phone = $request->driver_phone ;
        $data->module = $request->module ;
        $data->user_id = $request->user_id ;
        $data->company_id = $request->company_id ;
        $data->update();
        return redirect(backpack_url('deliverynote/'.$data->id.'/show'));
    }

    public function generateDeliveryNote($id)
    {
        $deliveryNoteService = new DeliveryNoteServices();
        $deliveryNoteModel = new DeliveryNote();
        $deliveryNote = $deliveryNoteModel::where('warehouse_out_id', $id)->first();
        if (!empty($deliveryNote)) {
            \Alert::error('Delivery Order dengan Nomor: '.$deliveryNote->warehouse_out_id.' Sudah Ada')->flash();
        }else{
            $data = $deliveryNoteService->GenerateNoDeliveryNote('DN', array('warehouse_id' => $id));
            \Alert::success('Delivery Order dengan Nomor. '.$data['data']->warehouse_out_id.' Berhasil membuat DN')->flash();
        }
        return \Redirect::to($this->crud->route);

    }

    public function pdf(Request $request)
    {
        $data = DeliveryNote::where('id', '=', $request->id)->first();

        $pdf = PDF::loadview('warehouse.dn.output_do',['data'=>$data]);
    	return $pdf->stream($data->do_number.'.pdf');
    }

    public function process(Request $request)
    {
        $header = DeliveryNote::findOrFail($request->id);
        $header->status = Flag::COMPLETE;
        $details = DeliveryNoteDetail::where('delivery_note_id', '=', $request->id)->get();
        $header_do = $header->WarehouseOut;
        $do_details = BagItemWarehouseOut::where('warehouse_out_id', '=', $header_do->id)->get();
        foreach ($details as $detail) {
            $update = DeliveryNoteDetail::findOrFail($detail->id);
            $stocks = Stock::where('warehouse_id', '=', $header_do->warehouse_id)->where('item_id', '=', $detail->item_id)->first();
            $stock = Stock::findOrFail($stocks->id);
            $stock->stock_on_hand -= $detail->qty;
            $stock->stock_out_indent -= $detail->qty;
            $update->status = Flag::COMPLETE;
            $stock->update();
            $update->update();
        }
        foreach ($do_details as $do_detail) {
            if ($details->where('item_id', '=', $do_detail->item_id)->sum('qty') == $do_detail->qty) {
                $detail_pr = BagItemWarehouseOut::findOrFail($do_detail->id);
                $detail_pr->status = Flag::COMPLETE;
                $detail_pr->update();
            }
        }
        if (empty(BagItemWarehouseOut::where('warehouse_out_id', '=', $header_do->id)->where('status', '!=', Flag::COMPLETE)->first())) {
            $delivery_order = WarehouseOut::findOrFail($header_do->id);
            $delivery_order->status = Flag::COMPLETE;
            $delivery_order->update();
        }
        $header->update();

        \Alert::add('success', 'Berhasil submit ' . $header->do_number)->flash();
        return redirect()->back();
    }
}
