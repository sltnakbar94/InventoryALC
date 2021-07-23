<?php

namespace App\Http\Controllers\Admin\Api;

use App\Models\WarehouseOut;
use Illuminate\Http\Request;
use App\Services\CRUDServices;
use Illuminate\Support\Facades\DB;
use App\Models\BagItemWarehouseOut;
use App\Http\Controllers\Controller;
use App\Services\DeliveryOrderServices;

class DeliveryOrderController extends Controller
{
    public function __construct(
        BagItemWarehouseOut $deliveryOrderDetail,

        CRUDServices $crudService,

        DeliveryOrderServices $deliveryOrderServices
        ) {
        $this->deliveryOrderDetail = $deliveryOrderDetail;

        $this->crudService = $crudService;
        $this->deliveryOrderServices = $deliveryOrderServices;
    }


    /**
     * Get Delivery Order Detail by ID
     *
     * @param Request $request
     * @return void
     */
    public function getDeliveryOrderDetailById(Request $request)
    {
        $deliveryOrderDetail = $this->deliveryOrderDetail::find($request->delivery_order_id);
        if ($deliveryOrderDetail == null) {
            $return = array (
                'code' => 404,
                'error' => true,
                'message' => 'Data Tidak Ditemukan',
            );
        }else{
            $return = array (
                'code' => 200,
                'success' => true,
                'data' => $deliveryOrderDetail,
                'message' => 'Data Ditemukan',
            );
        }
        return $return;
    }

    /**
     * Update Delivery Order Detail by Delivery Order ID
     *
     * @param int $id
     * @param Request $request
     * @return void
     */
    public function UpdateDeliveryOrder($id, Request $request)
    {
        $sub_total = $this->deliveryOrderServices->SumItemDiscountToSubTotal($request);
        $DO_Detail = $this->deliveryOrderServices->ItemOnDODetail(array('warehouse_out_id' => $request->warehouse_out_id, 'item_id' => $request->item_id));
        $update = BagItemWarehouseOut::find($DO_Detail->id);
        $update->qty = $request->qty;
        $update->update();
        \Alert::add('success', 'Berhasil ubah data')->flash();
        return redirect()->back();
    }
}
