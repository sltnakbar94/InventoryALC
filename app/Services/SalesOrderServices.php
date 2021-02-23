<?php
namespace App\Services;

use App\Models\BagItemWarehouseIn;
use App\Models\BagItemWarehouseOut;
use App\Models\Item;
use App\Models\SalesOrder;
use App\Models\SalesOrderDetail;
use GuzzleHttp\Psr7\Request;

/**
 * Handle All Trx on Sales Order
 */
class SalesOrderServices  {

    public function __construct(
        SalesOrderDetail $salesOrderDetail, 
        SalesOrder $salesOrder,

        CRUDServices $crudService,
        ItemServices $itemService
    ) {
        $this->salesOrderDetail = $salesOrderDetail;
        $this->salesOrder = $salesOrder;

        $this->crudService = $crudService;
        $this->itemService = $itemService;
    }

    /**
     * Get Detail Sales Order by ID
     *
     * @param int $sales_order_detail_id
     * @return Collection
     */
    public function GetDetailByID($sales_order_detail_id)
    {
        return $this->salesOrderDetail::find($sales_order_detail_id);
    }

    /**
     * Get Detail by Sales Order ID
     *
     * @param array $sales_order_id
     * @return Collection
     */
    public function GetDetailBySalesOrderID($sales_order_id)
    {
        $data = $this->salesOrderDetail::find($sales_order_id)->get();
        if (!empty($data)) {
            return $data;
        } return null;
    }

    /**
     * Check Item on Sales Order Detail by Sales Order ID & Item ID
     *
     * @param array $params 
     * @return Boolean
     */
    public function CheckItemOnSODetail($params)
    {
       return $this->salesOrderDetail::where($params)->first() == null ? true : false; 
    }

    /**
     * Get Item On Sales Order Detail by Sales Order ID & Item ID
     *
     * @param array $params
     * @return Boolean
     */
    public function ItemOnSODetail($params)
    {
        return $this->salesOrderDetail::where($params)->first() == null ? true : $this->salesOrderDetail::where($params)->first(); 
    }

    /**
     * Get Item Price on Sales Order Detail by Sales Order ID, Item ID & Status !== (2,3)
     *
     * @param array $params
     * @return array ('price')
     */
    public function ItemPriceOnSODetail($params)
    {
        return $this->salesOrderDetail::where($params)->get() == null ? false : $this->salesOrderDetail::where($params)->pluck(); 
    }

    /**
     * Increase Price Item per Item on Sales Order Detail
     *
     * @param array $sales_order_id
     * @return Integer $price_update
     */
    public function SumItemPriceBySalesOrderID($sales_order_id)
    {
        $price = $this->salesOrderDetail::where('sales_order_id', $sales_order_id)->pluck('sub_total')->toArray(); 
        $sum_price = array_sum($price);
        return $sum_price;
    }

    /**
     * Multiplied Price Item and Discount on Sales Order Detail
     *
     * @param Collection $request
     * @return Integer $sub_total
     */
    public function SumItemDiscountToSubTotal($request)
    {
        if (empty($request['discount'])) {
            $sub_total = $request['price']*$request['qty'];
        } else {
            $sub_total = ($request['price'] - ($request['discount']/100*$request['price']))*$request['qty'];
        }
        return $sub_total;
    }
    
    /**
     * Handle Update Quality Controll Pass By Sales Order Detail ID
     *
     * @param int $sales_order_detail_id
     * @param int $qty_confirm
     * @return boolean
     */
    public function UpdateQCPass($sales_order_detail_id)
    {
        $QC_pass_update_qty = $this->salesOrderDetail::where('sales_order_id', $sales_order_detail_id)->pluck('qty_confirm')->toArray(); 
        return $QC_pass_update_qty;
    }

    /**
     * Get Quantity by ID
     *
     * @param int $sales_order_detail_id
     * @return int $qty
     */
    public function GetQTYByID($sales_order_detail_id)
    {
        return $this->salesOrderDetail::find($sales_order_detail_id)->qty;
    }

    /**
     * Get Quantity after Quality Controll Pass by Sales Order Detail ID
     *
     * @param int $sales_order_detail_id
     * @return int $qty_confirm
     */
    public function GetQTYPassbyID($sales_order_detail_id)
    {
        return $this->GetDetailByID($sales_order_detail_id)->qty_confirm;
    }
    
    public function createSODetail($request)
    {
        dd($request);
    }
}
