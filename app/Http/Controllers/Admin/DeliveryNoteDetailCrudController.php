<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DeliveryNoteDetailRequest;
use App\Models\DeliveryNoteDetail;
use App\Models\Item;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;

/**
 * Class DeliveryNoteDetailCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DeliveryNoteDetailCrudController extends CrudController
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
        CRUD::setModel(\App\Models\DeliveryNoteDetail::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/deliverynotedetail');
        CRUD::setEntityNameStrings('deliverynotedetail', 'delivery_note_details');
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
        CRUD::setValidation(DeliveryNoteDetailRequest::class);

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

    public function store(Request $request)
    {
        $find = DeliveryNoteDetail::where('delivery_note_id', '=', $request->delivery_note_id)->where('item_id', '=', $request->item_id)->first();
        if (!empty($find)) {
            $data = DeliveryNoteDetail::findOrFail($request->item_id);
            $data->qty = $data->qty + $request->qty;
            $data->update();
        } else {
            $item = Item::findOrFail($request->item_id);
            $data = new DeliveryNoteDetail;
            $data->delivery_note_id = $request->delivery_note_id;
            $data->item_id = $request->item_id;
            $data->serial = $item->serial;
            $data->qty = $request->qty;
            $data->uom = $item->unit;
            $data->save();
        }

        \Alert::add('success', 'Berhasil tambah item ' . $item->name)->flash();
        return redirect()->back();
    }
}
