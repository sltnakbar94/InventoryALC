<?php
namespace App\Services;

use App\Models\BagItemWarehouseIn;
use App\Models\WarehouseIn;

/**
 * Handle All Trx on Warehouse i/o
 */
class PurchaseOrderServices  {

    public function __construct(
        WarehouseIn $warehouseIn,
        BagItemWarehouseIn $bagItemWarehouseIn, 

        CRUDServices $crudService,
        ItemServices $itemService
    ) {
        $this->purchaseOrder = $warehouseIn;
        $this->purchaseOrderDetail = $bagItemWarehouseIn;

        $this->crudService = $crudService;
        $this->itemService = $itemService;
    }

    /**
     * Get Detail Purchase Order by ID
     *
     * @param int $warehouse_in_id
     * @return Collection
     */
    public function GetDetailByID($purchase_order_detail_id)
    {
        return $this->purchaseOrderDetail::find($purchase_order_detail_id);
    }

    /**
     * Get Detail by Purchase Order ID
     *
     * @param array $purchase_order_id
     * @return Collection
     */
    public function GetDetailByPOID($purchase_order_id)
    {
        $data = $this->purchaseOrderDetail::find($purchase_order_id)->get();
        if (!empty($data)) {
            return $data;
        } return null;
    }

    /**
     * Check Item on Purchase Order Detail by Purchase Order ID & Item ID
     *
     * @param array $params 
     * @return Boolean
     */
    public function CheckItemOnPODetail($params)
    {
       return $this->purchaseOrderDetail::where($params)->first() == null ? true : false; 
    }

    /**
     * Get Item On Purchase Order Detail by Purchase Order ID & Item ID
     *
     * @param array $params
     * @return Boolean
     */
    public function ItemOnPODetail($params)
    {
        return $this->purchaseOrderDetail::where($params)->first() == null ? true : $this->purchaseOrderDetail::where($params)->first(); 
    }

    /**
     * Get Item Price on Purchase Order Detail by Purchase Order ID, Item ID & Status !== (2,3)
     *
     * @param array $params
     * @return array ('price')
     */
    public function ItemPriceOnPODetail($params)
    {
        return $this->purchaseOrderDetail::where($params)->get() == null ? false : $this->purchaseOrderDetail::where($params)->pluck(); 
    }

    /**
     * Increase Price Item per Item on Purchase Order Detail
     *
     * @param array $sales_order_id
     * @return Integer $price_update
     */
    public function SumItemPriceByPurchaseOrderID($purchase_order_id)
    {
        $price = $this->purchaseOrderDetail::where('warehouse_in_id', $purchase_order_id)->pluck('sub_total')->toArray(); 
        $sum_price = array_sum($price);
        return $sum_price;
    }

    /**
     * Multiplied Price Item and Discount on Purchase Order Detail
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
     * Handle Update Quality Controll Pass By Purchase Order Detail ID
     *
     * @param int $purchase_order_detail_id
     * @param int $qty_confirm
     * @return boolean
     */
    public function UpdateQCPass($purchase_order_detail_id)
    {
        $QC_pass_update_qty = $this->purchaseOrderDetail::where('warehouse_in_id', $purchase_order_detail_id)->pluck('qty_confirm')->toArray(); 
        return $QC_pass_update_qty;
    }

    /**
     * Get Quantity by ID
     *
     * @param int $purchase_order_detail_id
     * @return int $qty
     */
    public function GetQTYByID($purchase_order_detail_id)
    {
        return $this->purchaseOrderDetail::find($purchase_order_detail_id)->qty;
    }

    /**
     * Get Quantity after Quality Controll Pass by Purchase Order Detail ID
     *
     * @param int $purchase_order_detail_id
     * @return int $qty_confirm
     */
    public function GetQTYPassbyID($purchase_order_detail_id)
    {
        return $this->GetDetailByID($purchase_order_detail_id)->qty_confirm;
    }
}
