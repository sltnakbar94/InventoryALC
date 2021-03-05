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
        $detail = SalesOrderDetail::findOrFail($request->sales_order_detail_id);
        $detail->qty = $request->qty;
        $detail->price = $request->price;
        if (!empty($request->discount) || $request->discount == 0) {
            $detail->discount = $request->discount;
            $detail->sub_total = (($request->discount/100*$request->price)+$request->price)*$request->qty;
        }else{
            $detail->sub_total = $request->price*$request->qty;
        }
        $detail->update();

        \Alert::add('success', 'Berhasil ubah data Item')->flash();
        return redirect()->back();
    }


}
