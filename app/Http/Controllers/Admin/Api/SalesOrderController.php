<?php

namespace App\Http\Controllers\Admin\Api;

use App\Flag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SalesOrderDetail;
use App\Services\CRUDServices;
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

    public function UpdateSalesOrder($id, Request $request)
    {
        $salesOrderDetail = $this->salesOrderDetail->getDetailByItemID(array('item_id' => $request->item_id, 'sales_order_id' => $id));
        if ($salesOrderDetail != null) {
            if ($salesOrderDetail->status == Flag::PLANT) {
                $updateSODetail = $this->crudService->handleUpdate([
                    'model' => $this->salesOrderDetail,
                    'where' => array('id' => $salesOrderDetail->id),
                    'data' => array(
                        'qty_confirm' => $request->qty,
                        'price' => $request->price,
                        'status' => Flag::PROCESS,
                        'discount' => $request->discount
                    ),
                    'message' => 'Sales Order Berhasil '
                ]);
                if ($updateSODetail) {
                    return $this->returnSuccess($salesOrderDetail, 'Sales Order dengan ID '.$salesOrderDetail->sales_order_id.' Berhasil di Update');
                }else{
                    return $this->returnError($updateSODetail->message);
                }
            }
        }else{
            return $this->returnError('Data Tidak Ditemukan');
        }
    }


}
