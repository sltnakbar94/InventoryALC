<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SalesDnRequest;
use App\Models\SalesDn;
use App\Models\SalesOrder;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use PDF;
use Illuminate\Http\Request;

/**
 * Class SalesDnCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SalesDnCrudController extends CrudController
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
        CRUD::setModel(\App\Models\SalesDn::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/salesdn');
        CRUD::setEntityNameStrings('Delivery Sales Order', 'Delivery Sales Order');
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
        $this->crud->addClause('where', 'module', '=', 'sales_order');
        $this->crud->addColumn([
            'name' => 'dn_number',
            'type' => 'text',
            'label' => 'Nomor Surat Jalan'
        ]);

        $this->crud->addColumn([
            'name' => 'reference',
            'type' => 'select',
            'entity' => 'salesOrder',
            'attribute' => 'so_number',
            'model' => 'App\Models\SalesOrder',
            'label' => 'Nomor SO'
        ]);

        $this->crud->addColumn([
            'name' => 'dn_date',
            'type' => 'date',
            'label' => 'Tanggal Delivery Note'
        ]);

        $this->crud->addColumn([
            'name' => 'expedition',
            'type' => 'text',
            'label' => 'Ekspedisi'
        ]);

        $this->crud->addColumn([
            'name' => 'etd',
            'type' => 'date',
            'label' => 'Estimasi Keberangkatan'
        ]);

        $this->crud->addColumn([
            'name' => 'eta',
            'type' => 'date',
            'label' => 'Estimasi Sampai'
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

        $count = SalesDn::withTrashed()->whereDate('created_at', date('Y-m-d'))->count();
        $number = str_pad($count + 1,3,"0",STR_PAD_LEFT);

        $generate = $month.$day."-".$number."/WHO-SJ/".$year;

        return $generate;
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(SalesDnRequest::class);
        $this->crud->removeSaveActions(['save_and_back','save_and_edit','save_and_new']);

        $this->crud->addField([
            'label' => "Nomor Surat jalan",
            'name'  => "dn_number",
            'type'  => 'text',
            'value' => $this->generateNomorPengiriman(),
            'attributes' => [
                'readonly'    => 'readonly',
            ]
        ]);

        $this->crud->addField([
            'name' => 'reference',
            'label' => 'Nomor SO',
            'type' => 'select2_from_array',
            'options' => SalesOrder::pluck('so_number', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'dn_date',
            'label' => 'Tanggal Surat Jalan',
            'type' => 'date_picker',
        ]);

        $this->crud->addField([
            'name' => 'expedition',
            'label' => 'Expedisi',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'etd',
            'label' => 'Estimasi Keberangkatan',
            'type' => 'datetime_picker',
        ]);

        $this->crud->addField([
            'name' => 'eta',
            'label' => 'Estimasi Sampai',
            'type' => 'datetime_picker',
        ]);

        $this->crud->addField([
            'name' => 'total_weight',
            'label' => 'Berat Total Barang (KG)',
            'type' => 'number',
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
            'value' => 'sales_order',
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
            'type'  => 'text',
            'attributes' => [
                'readonly'    => 'readonly',
            ]
        ]);

        $this->crud->addField([
            'name' => 'reference',
            'label' => 'Nomor SO',
            'type' => 'select2_from_array',
            'options' => SalesOrder::pluck('so_number', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'dn_date',
            'label' => 'Tanggal Surat Jalan',
            'type' => 'date_picker',
        ]);

        $this->crud->addField([
            'name' => 'expedition',
            'label' => 'Expedisi',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'etd',
            'label' => 'Estimasi Keberangkatan',
            'type' => 'datetime_picker',
        ]);

        $this->crud->addField([
            'name' => 'eta',
            'label' => 'Estimasi Sampai',
            'type' => 'datetime_picker',
        ]);

        $this->crud->addField([
            'name' => 'total_weight',
            'label' => 'Berat Total Barang',
            'type' => 'text',
            'attributes' => [
                'placeholder' => 'Contoh : 80 KG',
              ],
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
            'value' => 'sales_order',
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

    public function pdf(Request $request)
    {
        $data = SalesDn::findOrFail($request->id);

        $pdf = PDF::loadview('warehouse.dn.output',['data'=>$data]);
    	return $pdf->stream($data->do_number.'.pdf');
    }
}
