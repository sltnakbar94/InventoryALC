<?php

namespace App\Http\Controllers\Admin\Api;

use App\Flag;
use App\Models\SalesOrder;
use Illuminate\Http\Request;
use App\Services\CRUDServices;
use App\Models\SalesOrderDetail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Services\SalesOrderServices;

class SalesOrderController extends Controller
{
    public function __construct(
        SalesOrderDetail $salesOrderDetail,


        CRUDServices $crudService,
        SalesOrderServices $salesOrderServices
        ) {
        $this->salesOrderDetail = $salesOrderDetail;

        $this->crudService = $crudService;
        $this->salesOrderServices = $salesOrderServices;
    }

    /**
     * Get Sales Order Detail by ID
     *
     * @param Request $request
     * @return void
     */
    public function getSalesOrderDetailById(Request $request)
    {
        $salesOrderDetail = $this->salesOrderDetail::find($request->sales_order_id);
        if ($salesOrderDetail == null) {
            $return = array (
                'code' => 404,
                'error' => true,
                'message' => 'Data Tidak Ditemukan',
            );
        }else{
            $return = array (
                'code' => 200,
                'success' => true,
                'data' => $salesOrderDetail,
                'message' => 'Data Ditemukan',
            );
        }
        return $return;
    }

    /**
     * Update Sales Order Detail by Sales Order ID
     *
     * @param int $id
     * @param Request $request
     * @return void
     */
    public function UpdateSalesOrder($id, Request $request)
    {
        $sub_total = $this->salesOrderServices->SumItemDiscountToSubTotal($request);
        $SO_Detail = $this->salesOrderServices->ItemOnSODetail(array('sales_order_id' => $request->sales_order_id, 'item_id' => $request->item_id));
        try {
            DB::beginTransaction();

            // Update Sales Order Detail by Sales Order Detail ID
            SalesOrderDetail::find($SO_Detail->id)->update([
                'qty'           => $request->qty,
                'price'         => $request->price,
                'discount'      => $request->discount,
                'sub_total'     => $sub_total,
            ]);

            // New Grand Total on Sales Order
            $SO_GT_update = $this->salesOrderServices->SumItemPriceBySalesOrderID($request->sales_order_id);
            SalesOrder::find($request->sales_order_id)->update([
                'grand_total' => $SO_GT_update
            ]);

            DB::commit();
            return $this->returnSuccess($SO_Detail, 'Sales Order dengan ID '.$SO_Detail->sales_order_id.' Berhasil di Update');
        } catch (\Throwable $th) {
            DB::rollback();
            return $this->returnError($th->getMessage());
        }
    }


}
