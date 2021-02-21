<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StackholderRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class StackholderCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class StackholderCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Stackholder::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/stackholder');
        CRUD::setEntityNameStrings('Stackholder', 'Stackholders');
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
            'name' => 'company',
            'type' => 'text',
            'label' => 'Perusahaan'
        ]);

        $this->crud->addColumn([
            'name' => 'address',
            'type' => 'text',
            'label' => 'Alamat Perusahaan'
        ]);

        $this->crud->addColumn([
            'name'  => 'pic',
            'label' => 'PIC',
            'type'  => 'table',
            'columns' => [
                'name'        => 'Nama',
                'email' => 'E-Mail',
                'telp'       => 'No telp',
            ]
        ]);

        $this->crud->addColumn([
            'name'  => 'active',
            'label' => 'Status',
            'type'  => 'boolean',
            // optionally override the Yes/No texts
            'options' => [0 => 'Inactive', 1 => 'Active']
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
        CRUD::setValidation(StackholderRequest::class);

        $this->crud->addField([
            'label' => "Perusahaan",
            'name'  => "company",
            'type'  => 'text',
            'attributes' => [
                'placeholder' => 'PT.XXXXXXX',
              ],
        ]);

        $this->crud->addField([
            'label' => "Alamat Perusahaan",
            'name'  => "address",
            'type'  => 'textarea',
        ]);

        $this->crud->addField([   // Table
            'name'            => 'pic',
            'label'           => 'Person in Charge',
            'type'            => 'table',
            'entity_singular' => 'option', // used on the "Add X" button
            'columns'         => [
                'name'  => 'Name',
                'email'  => 'E-Mail',
                'telp' => 'No Telp'
            ],
            'min' => 0, // minimum rows allowed in the table
        ]);

        $this->crud->addField([   // SelectMultiple = n-n relationship (with pivot table)
            'label'     => "Role Stackholder",
            'type'      => 'select2_multiple',
            'name'      => 'stackholderRole', // the method that defines the relationship in your Model
            'pivot'     => true,
            'entity'    => 'stackholderRole',
            'attribute' => 'name',
            'model'     => 'App\Models\StackholderRole',
        ]);

        $this->crud->addField([   // Checkbox
            'name'  => 'active',
            'label' => 'Active',
            'type'  => 'checkbox',
            'value'  => 1,
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
