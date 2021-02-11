<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\BagItemWarehouseOut;
use App\Models\WarehouseIn;
use App\Models\WarehouseOut;
use App\Models\VerifWO;
use Carbon;

class AdminController extends Controller
{
    public $data = []; // the information we send to the view

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(backpack_middleware());
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard(Request $request)
    {
        $this->data['title'] = trans('backpack::base.dashboard'); // set the page title
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin')     => backpack_url('dashboard'),
            trans('backpack::base.dashboard') => false,
        ];

        $this->purchaseOrder();
        $this->deliveryOrder();
        $this->deliveryNote();

        $this->counter();

        return view('dashboard', $this->data);
    }

    /**
     * Redirect to the dashboard.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function redirect()
    {
        // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
        return redirect(backpack_url('dashboard'));
    }

    public function purchaseOrder()
    {
        $count = WarehouseIn::get();
        // dd($count);

        $this->data['purchase_order'] = [
            'Item' => [
                'count' => $count,
            ],
        ];
    }

    public function deliveryOrder()
    {
        $items = BagItemWarehouseOut::get();

        $this->data['delivery_order'] = [
            'Item' => [
                'count' => $items,
            ],
        ];
    }

    public function deliveryNote()
    {
        $this->data['purchase_order'] = WarehouseIn::get();
    }

    public function counter()
    {
        $purchase_order = WarehouseIn::count('id');
        $delivery_order = WarehouseOut::count('id');
        $delivery_note = VerifWO::count('id');

        // redis check here
        $this->data['counter'] = [
            'purchase_order' => [
                'count' => $purchase_order,
            ],
            'delivery_order' => [
                'count' => $delivery_order,
            ],
            'delivery_note' => [
                'count' => $delivery_note,
            ],
        ];
    }
}
