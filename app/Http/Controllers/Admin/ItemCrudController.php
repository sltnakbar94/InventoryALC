<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ItemRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Unit;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ItemCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ItemCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Item::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/item');
        CRUD::setEntityNameStrings('item', 'items');
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
            'name' => 'name',
            'type' => 'text',
            'label' => 'Nama Item'
        ]);

        $this->crud->addColumn([
            'name' => 'serial',
            'type' => 'text',
            'label' => 'Serial'
        ]);

        $this->crud->addColumn([
            'name' => 'category',
            'type' => 'select',
            'entity' => 'Categories',
            'attribute' => 'name',
            'model' => 'App\Models\Category',
            'label' => 'Kategori'
        ]);

        $this->crud->addColumn([
            'name' => 'brand',
            'type' => 'select',
            'entity' => 'Brands',
            'attribute' => 'name',
            'model' => 'App\Models\Brand',
            'label' => 'Brand'
        ]);

        $this->crud->addColumn([
            'name' => 'unit',
            'type' => 'select',
            'entity' => 'uoms',
            'attribute' => 'name',
            'model' => 'App\Models\Unit',
            'label' => 'UoM'
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
        CRUD::setValidation(ItemRequest::class);

        $this->crud->addField([
            'label' => "Nama",
            'name'  => "name",
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'label' => "Nomor Serial",
            'name'  => "serial",
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'name' => 'category',
            'label' => 'Kategori',
            'type' => 'select_from_array',
            'options' => Category::pluck('name' , 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'brand',
            'label' => 'Brand',
            'type' => 'select_from_array',
            'options' => Brand::pluck('name' , 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'unit',
            'label' => 'Satuan',
            'type' => 'select_from_array',
            'options' => Unit::pluck('name' , 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'netto',
            'label' => 'Jumlah/Kg(Netto)',
            'type' => 'text'
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
}
