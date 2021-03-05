<?php

namespace App\Http\Controllers\Admin\Api;

use App\Models\WarehouseIn;
use Illuminate\Http\Request;
use App\Services\CRUDServices;
use App\Models\BagItemWarehouseIn;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Services\PurchaseOrderServices;

class PurchaseOrderController extends Controller
{
    public function __construct(
        BagItemWarehouseIn $purchaseOrderDetail,

        CRUDServices $crudService,
        PurchaseOrderServices $purchaseOrderServices
        ) {
        $this->purchaseOrderDetail = $purchaseOrderDetail;

        $this->crudService = $crudService;
        $this->purchaseOrderServices = $purchaseOrderServices;
    }

    /**
     * Get Purchase Order Detail by ID
     *
     * @param Request $request
     * @return void
     */
    public function getPurchaseOrderDetailById(Request $request)
    {
        $purchaseOrderDetail = $this->purchaseOrderDetail::find($request->purchase_order_id);
        if ($purchaseOrderDetail == null) {
            $return = array (
                'code' => 404,
                'error' => true,
                'message' => 'Data Tidak Ditemukan',
            );
        }else{
            $return = array (
                'code' => 200,
                'success' => true,
                'data' => $purchaseOrderDetail,
                'message' => 'Data Ditemukan',
            );
        }
        return $return;
    }


    /**
     * Update Purchase Order Detail by Purchase Order ID
     *
     * @param int $id
     * @param Request $request
     * @return void
     */
    public function UpdatePurchaseOrder($id, Request $request)
    {
        $sub_total = $this->purchaseOrderServices->SumItemDiscountToSubTotal($request);
        $PO_Detail = $this->purchaseOrderServices->ItemOnSODetail(array('purchase_order_id' => $request->purchase_order_id, 'item_id' => $request->item_id));
        try {
            DB::beginTransaction();

            // Update Purchase Order Detail by Purchase Order Detail ID
            BagItemWarehouseIn::find($PO_Detail->id)->update([
                'qty'           => $request->qty,
                'price'         => $request->price,
                'discount'      => $request->discount,
                'sub_total'     => $sub_total,
                'status'        => '1'
            ]);

            // New Grand Total on Purchase Order
            $PO_GT_update = $this->purchaseOrderServices->SumItemPriceByPurchaseOrderID($request->purchase_order_id);
            WarehouseIn::find($request->purchase_order_id)->update([
                'grand_total' => $PO_GT_update
            ]);

            DB::commit();
            return $this->returnSuccess($PO_Detail, 'Purchase Order dengan ID '.$PO_Detail->purchase_order_id.' Berhasil di Update');
        } catch (\Throwable $th) {
            DB::rollback();
            return $this->returnError($th->getMessage());
        }
    }
}
