<?php

namespace App\Http\Controllers\Admin;

use App\Models\WarehouseOut;
use App\Services\GlobalServices;
use App\Http\Requests\DeliveryNoteRequest;
use App\Models\DeliveryNote;
use App\Services\DeliveryNoteServices;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use PDF;

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
        CRUD::setEntityNameStrings('deliverynote', 'delivery_notes');
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
        $this->crud->removeButton('create');
        $this->crud->removeButton('show');
        $this->crud->removeButton('delete');
        $this->crud->removeColumn('meta');
        $this->crud->addButtonFromView('line', 'pdf', 'pdf', 'beginning');

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
        CRUD::setValidation(DeliveryNoteRequest::class);

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
        $this->crud->addField([
            'name' => 'kd_delivery_notes',
            'type' => 'text',
            'label' => 'Nomor DN'
        ]);

        $this->crud->addField([
            'name' => 'warehouse_out_id',
            'type' => 'text',
            'label' => 'Nomor WOs'
        ]);
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

    public function pdf($id)
    {
        $data = DeliveryNote::where('id', '=', $id)->first();

        $pdf = PDF::loadview('warehouse.dn.output',['data'=>$data]);
    	return $pdf->stream($data->do_number.'.pdf');
    }
}
