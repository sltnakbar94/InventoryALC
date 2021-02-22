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
     * @param array $params
     * @return Collection
     */
    public function GetDetailBySalesOrderID($params)
    {
        $data = $this->salesOrderDetail::where($params)->get();
        if (!empty($data)) {
            return $data;
        } return null;
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
    
    /**
     * Handle Update Quality Controll Pass By Sales Order Detail ID
     *
     * @param int $sales_order_detail_id
     * @param int $qty_confirm
     * @return boolean
     */
    public function UpdateQCPass($sales_order_detail_id, $qty_confirm)
    {
        
    }
}
