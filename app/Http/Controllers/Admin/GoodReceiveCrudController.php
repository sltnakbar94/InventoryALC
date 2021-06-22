<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\GoodReceiveRequest;
use App\Models\Company;
use App\Models\GoodReceive;
use App\Models\Item;
use App\Models\Stock;
use App\Models\Warehouse;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;

/**
 * Class GoodReceiveCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class GoodReceiveCrudController extends CrudController
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
        CRUD::setModel(\App\Models\GoodReceive::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/goodreceive');
        CRUD::setEntityNameStrings('Penerimaan Barang', 'Form Penerimaan Barang');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // $this->crud->removeButton('update');
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
        CRUD::setValidation(GoodReceiveRequest::class);

        $this->crud->removeSaveActions(['save_and_back','save_and_edit','save_and_new']);

        $this->crud->addField([
            'label' => "Nomor Surat jalan",
            'name'  => "dn_number",
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'label' => 'Tanggal Surat Jalan',
            'name'  => 'dn_date',
            'type'  => 'date_picker',
            'date_picker_options' => [
                'todayBtn' => 'linked',
            ],
        ]);

        $this->crud->addField([
            'label' => "Nomor DO",
            'name'  => "do_number",
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'label' => "Nomor PO",
            'name'  => "po_number",
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'label' => "Nama Pengirim",
            'name'  => "sender",
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'label' => "Alamat Pengirim",
            'name'  => "sender_address",
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'name' => 'warehouse_id',
            'label' => 'Pilih gudang penerima',
            'type' => 'select2_from_array',
            'options' => Warehouse::where('active', '=', 1)->pluck('name', 'id'),
            'allows_null' => false,
        ]);

        $this->crud->addField([
            'label' => "Nama Penerima",
            'name'  => "consignee",
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'name' => 'company_id',
            'label' => 'Pilih Perusahaan',
            'type' => 'select2_from_array',
            'options' => Company::where('active', '=', 1)->pluck('name', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'label' => "Nama Project",
            'name'  => "project_name",
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'label' => "Nama Ekspedisi",
            'name'  => "expedition",
            'type'  => 'text',
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

        $this->crud->addField([   // repeatable
            'name'  => 'goods',
            'label' => 'Data Barang',
            'type'  => 'repeatable',
            'fields' => [
                [
                    'label'    => 'Material Code',
                    'type'    => 'text',
                    'name'   => 'material_code',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'label'    => 'Material Description',
                    'type'    => 'text',
                    'name'   => 'material_description',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'label'    => 'PO Number',
                    'type'    => 'text',
                    'name'   => 'po_number',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'label'    => 'SO Number',
                    'type'    => 'text',
                    'name'   => 'so_number',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'label'    => 'Quantity',
                    'type'    => 'number',
                    'name'   => 'qty',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'label'    => 'UoM',
                    'type'    => 'text',
                    'name'   => 'uom',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'label'    => 'Boxes',
                    'type'    => 'number',
                    'name'   => 'boxes',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'label'    => 'Weight (Kg)',
                    'type'    => 'number',
                    'name'   => 'netto',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'label'    => 'Volume (m3)',
                    'type'    => 'number',
                    'name'   => 'volume',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
                [
                    'label'    => 'Pallets',
                    'type'    => 'number',
                    'name'   => 'pallet',
                    'wrapper' => ['class' => 'form-group col-md-4'],
                ],
            ],

            // optional
            'new_item_label'  => 'Add Group', // customize the text of the button
            'min_rows' => 1, // minimum rows allowed, when reached the "delete" buttons will be hidden

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

    public function store(Request $request)
    {
        $data = new GoodReceive();
        $data->dn_number = $request->dn_number;
        $data->do_number = $request->do_number;
        $data->po_number = $request->po_number;
        $data->dn_date = $request->dn_date;
        $data->warehouse_id = $request->warehouse_id;
        $data->sender = $request->sender;
        $data->sender_address = $request->sender_address;
        $data->consignee = $request->consignee;
        $data->company_id = $request->company_id;
        $data->project_name = $request->project_name;
        $data->expedition = $request->expedition;
        $data->plat_number = $request->plat_number;
        $data->driver = $request->driver;
        $data->driver_phone = $request->driver_phone;
        $data->goods = $request->goods;
        $data->user_id = $request->user_id;
        $items = json_decode($request->goods);
        foreach ($items as $item) {
            $look_item = Item::where('serial', '=', $item->material_code)->first();
            if (empty($look_item)) {
                $save_item = new Item();
                $save_item->name = $item->material_description;
                $save_item->serial = $item->material_code;
                $save_item->netto = $item->netto ;
                $save_item->category = "0";
                $save_item->brand = "0";
                $save_item->unit = "0";
                $save_item->save();
                $get_item = Item::where('serial', '=', $item->material_code)->first();
                $check_stock = Stock::where('warehouse_id', '=', $request->warehouse_id)->where('item_id', '=', $get_item->id)->first();
                if (empty($check_stock)) {
                    $stock = new Stock;
                    $stock->warehouse_id = $request->warehouse_id;
                    $stock->item_id = $get_item->id;
                    $stock->stock_on_hand = $item->qty;
                    $stock->stock_on_location = $item->qty;
                    $stock->save();
                }else{
                    $stock = Stock::findOrFail($check_stock->id);
                    $stock->stock_on_hand += $item->qty;
                    $stock->stock_on_location += $item->qty;
                    $stock->update();
                }
            } else {
                $get_item = Item::where('serial', '=', $item->material_code)->first();
                $save_item = Item::findOrFail($get_item->id);
                $save_item->name = $item->material_description;
                $save_item->serial = $item->material_code;
                $save_item->category = "0";
                $save_item->brand = "0";
                $save_item->unit = "0";
                $check_stock = Stock::where('warehouse_id', '=', $request->warehouse_id)->where('item_id', '=', $get_item->id)->first();
                $stock = Stock::findOrFail($check_stock->id);
                $stock->stock_on_hand += $item->qty;
                $stock->stock_on_location += $item->qty;
                $stock->update();
                $save_item->update();
            }
        }
        $data->save();
        $cari = GoodReceive::where('dn_number' , '=' , $request->dn_number)->first();
        return redirect(backpack_url('goodreceive/'.$cari->id.'/show'));
    }

    public function update(Request $request)
    {
        $data = GoodReceive::findOrFail($request->id);
        $old_items = json_decode($data->goods);
        $old_warehouse = $data->warehouse_id;
        $data->dn_number = $request->dn_number;
        $data->do_number = $request->do_number;
        $data->po_number = $request->po_number;
        $data->dn_date = $request->dn_date;
        $data->warehouse_id = $request->warehouse_id;
        $data->sender = $request->sender;
        $data->sender_address = $request->sender_address;
        $data->consignee = $request->consignee;
        $data->company_id = $request->company_id;
        $data->project_name = $request->project_name;
        $data->expedition = $request->expedition;
        $data->plat_number = $request->plat_number;
        $data->driver = $request->driver;
        $data->driver_phone = $request->driver_phone;
        $data->goods = $request->goods;
        $data->user_id = $request->user_id;
        $items = json_decode($request->goods);
        foreach ($old_items as $old_item) {
            $old_item_id = Item::where('serial', '=', $old_item->material_code)->first();
            $get_old_stock = Stock::where('warehouse_id', '=', $old_warehouse)->where('item_id', '=', $old_item_id->id)->first();
            $remove_old_stock = Stock::findOrFail($get_old_stock->id);
            $remove_old_stock->stock_on_hand -= $old_item->qty;
            $remove_old_stock->stock_on_location -= $old_item->qty;
            $remove_old_stock->update();
        }
        foreach ($items as $item) {
            $look_item = Item::where('serial', '=', $item->material_code)->first();
            if (empty($look_item)) {
                $save_item = new Item();
                $save_item->name = $item->material_description;
                $save_item->serial = $item->material_code;
                $save_item->category = "0";
                $save_item->brand = "0";
                $save_item->unit = "0";
                $save_item->save();
                $get_item = Item::where('serial', '=', $item->material_code)->first();
                $check_stock = Stock::where('warehouse_id', '=', $request->warehouse_id)->where('item_id', '=', $get_item->id)->first();
                if (empty($check_stock)) {
                    $stock = new Stock;
                    $stock->warehouse_id = $request->warehouse_id;
                    $stock->item_id = $get_item->id;
                    $stock->stock_on_hand = $item->qty;
                    $stock->stock_on_location = $item->qty;
                    $stock->save();
                }else{
                    $stock = Stock::findOrFail($check_stock->id);
                    $stock->stock_on_hand += $item->qty;
                    $stock->stock_on_location += $item->qty;
                    $stock->update();
                }
            } else {
                $get_item = Item::where('serial', '=', $item->material_code)->first();
                $save_item = Item::findOrFail($get_item->id);
                $save_item->name = $item->material_description;
                $save_item->serial = $item->material_code;
                $save_item->category = "0";
                $save_item->brand = "0";
                $save_item->unit = "0";
                $check_stock = Stock::where('warehouse_id', '=', $request->warehouse_id)->where('item_id', '=', $get_item->id)->first();
                $stock = Stock::findOrFail($check_stock->id);
                $stock->stock_on_hand += $item->qty;
                $stock->stock_on_location += $item->qty;
                $stock->update();
                $save_item->update();
            }
        }
        $data->update();
        return redirect(backpack_url('goodreceive/'.$request->id.'/show'));
    }
}
