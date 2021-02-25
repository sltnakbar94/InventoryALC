<?php
namespace App\Services;

use App\Models\Item;
use App\Models\BagItemWarehouseOut;
use App\Models\WarehouseOut;
use Illuminate\Support\Facades\DB;

/**
 * Handle All Trx on Warehouse out
 */
class DeliveryOrderServices  {

    public function __construct(
        WarehouseOut $deliveryOrder,
        BagItemWarehouseOut $deliveryOrderDetail, 
        Item $item,

        CRUDServices $crudService,
        ItemServices $itemService
    ) {
        $this->deliveryOrder = $deliveryOrder;
        $this->deliveryOrderDetail = $deliveryOrderDetail;
        $this->item = $item;

        $this->crudService = $crudService;
        $this->itemService = $itemService;
    }

    /**
     * Get Detail Delivery Order by ID
     *
     * @param int $warehouse_out_id
     * @return Collection
     */
    public function GetDetailByID($delivery_order_detail_id)
    {
        return $this->deliveryOrderDetail::find($delivery_order_detail_id);
    }

    /**
     * Get Detail by Delivery Order ID
     *
     * @param array $delivery_order_id
     * @return Collection
     */
    public function GetDetailByDOID($delivery_order_id)
    {
        $data = $this->deliveryOrderDetail::find($delivery_order_id)->get();
        if (!empty($data)) {
            return $data;
        } return null;
    }

    /**
     * Check Item on Delivery Order Detail by Delivery Order ID & Item ID
     *
     * @param array $params 
     * @return Boolean
     */
    public function CheckItemOnDODetail($params)
    {
       return $this->deliveryOrderDetail::where($params)->first() == null ? true : false; 
    }

    /**
     * Get Item On Delivery Order Detail by Delivery Order ID & Item ID
     *
     * @param array $params
     * @return Boolean
     */
    public function ItemOnDODetail($params)
    {
        return $this->deliveryOrderDetail::where($params)->first() == null ? true : $this->deliveryOrderDetail::where($params)->first(); 
    }

    /**
     * Get Item Price on Delivery Order Detail by Delivery Order ID, Item ID & Status !== (2,3)
     *
     * @param array $params
     * @return array ('price')
     */
    public function ItemPriceOnDODetail($params)
    {
        return $this->deliveryOrderDetail::where($params)->get() == null ? false : $this->deliveryOrderDetail::where($params)->pluck(); 
    }

    /**
     * Increase Price Item per Item on Delivery Order Detail
     *
     * @param array $sales_order_id
     * @return Integer $price_update
     */
    public function SumItemPriceByDeliveryOrderID($delivery_order_id)
    {
        $price = $this->deliveryOrderDetail::where('warehouse_out_id', $delivery_order_id)->pluck('sub_total')->toArray(); 
        $sum_price = array_sum($price);
        return $sum_price;
    }

    /**
     * Multiplied Price Item and Discount on Delivery Order Detail
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
     * Handle Update Quality Controll Pass By Delivery Order Detail ID
     *
     * @param int $delivery_order_detail_id
     * @param int $qty_confirm
     * @return boolean
     */
    public function UpdateQCPass($delivery_order_detail_id)
    {
        $QC_pass_update_qty = $this->deliveryOrderDetail::where('warehouse_out_id', $delivery_order_detail_id)->pluck('qty_confirm')->toArray(); 
        return $QC_pass_update_qty;
    }

    /**
     * Get Quantity by ID
     *
     * @param int $delivery_order_detail_id
     * @return int $qty
     */
    public function GetQTYByID($delivery_order_detail_id)
    {
        return $this->deliveryOrderDetail::find($delivery_order_detail_id)->qty;
    }

    /**
     * Get Quantity after Quality Controll Pass by Delivery Order Detail ID
     *
     * @param int $delivery_order_detail_id
     * @return int $qty_confirm
     */
    public function GetQTYPassbyID($delivery_order_detail_id)
    {
        return $this->GetDetailByID($delivery_order_detail_id)->qty_confirm;
    }

    /**
     * Increase QTY on Item
     *
     * @param int $DO_Detail_id
     * @return array
     */
    public function DecreaseItemQTY($DO_Detail_id)
    {
        $DO_Detail = $this->GetDetailByID($DO_Detail_id);
        $qty_confirm = $DO_Detail->qty_confirm == null ? $DO_Detail->qty : $DO_Detail->qty_confirm;
        $item = $this->item::find($DO_Detail->item_id);
        if ($item == null) {
            throw new \Exception("Item Tidak Ditemukan");  
        }
        if ($item->qty < $qty_confirm) {
            throw new \Exception("Quantity Melebihi Jumlah Stok Harap Perhatikan QC Pass");
        }
        $qty_update = $item->qty - $qty_confirm;
        $item->update(['qty' => $qty_update]);
        return array('success' => true, 'message' => 'QTY '.$item->name.' Berhasil bertambah');
    }
}
