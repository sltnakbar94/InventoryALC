<?php
namespace App\Services;

use App\Models\Item;
use App\Models\BagItemWarehouseIn;
use App\Models\BagItemWarehouseOut;

class ItemServices {

    public function __construct(
        Item $itemModel, 
        BagItemWarehouseOut $bagItemWarehouseOut,
        BagItemWarehouseIn $bagItemWarehouseIn
        ) {
        $this->itemModel = $itemModel;
        $this->bagItemWarehouseOut = $bagItemWarehouseOut;
        $this->bagItemWarehouseIn = $bagItemWarehouseIn;
    }

    /**
     * Get All Item
     *
     * @return Collection Item Model
     */
    public function ItemAll()
    {
        return $this->itemModel::all();
    }

    /**
     * Check Item By Id
     *
     * @param int $item_id
     * @return Collection
     */
    public function cekItemById($item_id)
    {
        return $this->itemModel::find($item_id);
    }

    /**
     * Check Quantity
     *
     * @param int $item_id
     * @return int
     */
    public function cekQtyItem($item_id)
    {
        return $this->itemModel::find($item_id)->qty;
    }

    /**
     * Check Item On Bag Warehouse Out
     *
     * @param int $warehouse_out_id
     * @param int $item_id
     * @return Collection
     */
    public function checkItemOnBagWO($warehouse_out_id, $item_id)
    {
        $check = $this->bagItemWarehouseOut::where(array(
            'warehouse_outs_id' => $warehouse_out_id, 
            'item_id' => $item_id))->first();
        return $check; 
    }
    
    /**
     * Check Item On Bag Warehouse In
     *
     * @param int $warehouse_out_id
     * @param int $item_id
     * @return Collection
     */
    public function checkItemOnBagIN($warehouse_in_id, $item_id)
    {
        $check = $this->bagItemWarehouseIn::where(array(
            'warehouse_ins_id' => $warehouse_in_id, 
            'item_id' => $item_id))->first();
        return $check; 
    }
}