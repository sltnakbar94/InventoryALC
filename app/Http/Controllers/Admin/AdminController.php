<?php

namespace App\Http\Controllers\Admin;

use App\Flag;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\BagItemWarehouseOut;
use App\Models\DeliveryNote;
use App\Models\WarehouseIn;
use App\Models\WarehouseOut;
use App\Models\Item;
use App\Models\Stackholder;
use App\Models\Stock;
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
        $this->tableItem();
        $this->stackholder();

        $this->counter();
        if (backpack_user()->hasAnyRole(['sales', 'operator-gudang'])) {
            if (empty(backpack_user()->Warehouse)) {
                return view('request-admin');
            } else {
                return view('dashboard', $this->data);
            }
        } else {
            return view('dashboard', $this->data);
        }
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
        if (backpack_user()->hasRole('operator-gudang')) {
            $count = WarehouseIn::where('warehouse_id', '=', backpack_user()->warehouse_id)->get();

            $this->data['purchase_order'] = [
                'Item' => [
                    'count' => $count,
                ],
            ];
        } elseif (backpack_user()->hasRole('sales')) {
            $count = WarehouseIn::where('user_id', '=', backpack_user()->id)->get();

            $this->data['purchase_order'] = [
                'Item' => [
                    'count' => $count,
                ],
            ];
        } else {
            $count = WarehouseIn::get();

            $this->data['purchase_order'] = [
                'Item' => [
                    'count' => $count,
                ],
            ];
        }

    }

    public function deliveryOrder()
    {
        if (backpack_user()->hasRole('operator-gudang')) {
            $items = WarehouseOut::where('warehouse_id', '=', backpack_user()->warehouse_id)->get();

            $this->data['delivery_order'] = [
                'Item' => [
                    'count' => $items,
                ],
            ];
        } elseif (backpack_user()->hasRole('sales')) {
            $items = WarehouseOut::where('user_id', '=', backpack_user()->id)->get();

            $this->data['delivery_order'] = [
                'Item' => [
                    'count' => $items,
                ],
            ];
        } else {
            $items = WarehouseOut::get();

            $this->data['delivery_order'] = [
                'Item' => [
                    'count' => $items,
                ],
            ];
        }
    }

    public function deliveryNote()
    {
        if (backpack_user()->hasRole('operator-gudang')) {
            $this->data['delivery_note'] = DeliveryNote::whereHas('WarehouseOut', function($query){$query->where('warehouse_id', '=', backpack_user()->warehouse_id);})->get();
        } elseif (backpack_user()->hasRole('sales')) {
            $this->data['delivery_note'] = DeliveryNote::whereHas('WarehouseOut', function($query){$query->where('user_id', '=', backpack_user()->id);})->get();
        } else {
            $this->data['delivery_note'] = DeliveryNote::get();
        }
    }

    public function counter()
    {
        if (backpack_user()->hasRole('operator-gudang')) {
            $purchase_order = WarehouseIn::where('warehouse_id', '=', backpack_user()->warehouse_id)->count('id');
            $delivery_order = WarehouseOut::where('warehouse_id', '=', backpack_user()->warehouse_id)->count('id');
            $delivery_note = DeliveryNote::whereHas('WarehouseOut', function($query){$query->where('warehouse_id', '=', backpack_user()->warehouse_id);})->where('status', '=', Flag::COMPLETE)->count('id');
        } elseif (backpack_user()->hasRole('sales')) {
            $purchase_order = WarehouseIn::where('user_id', '=', backpack_user()->id)->count('id');
            $delivery_order = WarehouseOut::where('user_id', '=', backpack_user()->id)->count('id');
            $delivery_note = DeliveryNote::whereHas('WarehouseOut', function($query){$query->where('user_id', '=', backpack_user()->id);})->where('status', '=', Flag::COMPLETE)->count('id');
        } else {
            $purchase_order = WarehouseIn::count('id');
            $delivery_order = WarehouseOut::count('id');
            $delivery_note = DeliveryNote::where('status', '=', Flag::COMPLETE)->count('id');
        }

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

    public function tableItem()
    {
        if (backpack_user()->hasAnyRole(['sales', 'operator-gudang'])) {
            $items = Stock::where('warehouse_id', '=', backpack_user()->warehouse_id)->where('stock_on_hand', '>', 0)->get();
        } else {
            $items = Stock::where('stock_on_hand', '>', 0)->get();
        }

        $this->data['items'] = $items;
    }

    public function stackholder()
    {
        $stackholders = Stackholder::get();

        $this->data['stackholders'] = $stackholders;
    }
}
