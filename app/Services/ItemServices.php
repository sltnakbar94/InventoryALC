<?php
namespace App\Services;

use App\Models\Item;
use App\Models\BagItemWarehouseIn;
use App\Models\BagItemWarehouseOut;

class ItemServices {

    public function __construct(
        Item $itemModel, 
        CRUDServices $crudServices,
        BagItemWarehouseOut $bagItemWarehouseOut,
        BagItemWarehouseIn $bagItemWarehouseIn
        ) {
        $this->itemModel = $itemModel;
        $this->crudService = $crudServices;

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

    /**
     * Add QTY From PO
     *
     * @param int $item_id
     * @param int $qty
     * @return Collection
     */
    public function AddQTYItemFromPO($item_id, $qty)
    {
        $item = $this->cekItemById($item_id);
        $sum_qty = $item->qty + $qty;
        return $this->crudService->handleUpdate([
            'model' => $this->itemModel,
            'data' => array(
                'qty' => $sum_qty,
            ),
            'where' => array(
                'id' => $item_id,
            ),
            'message' => 'Barang Berhasil Diterima'
        ]);
    }

    /**
     * Remove Item From DO
     *
     * @param int $item_id
     * @param int $qty
     * @return Collection
     */
    public function RemoveQTYItemFromDO($item_id, $qty)
    {
        $item = $this->cekItemById($item_id);
        $sum_qty = $item->qty - $qty;
        return $this->crudService->handleUpdate([
            'model' => $this->itemModel,
            'data' => array(
                'qty' => $sum_qty,
            ),
            'where' => array(
                'id' => $item_id,
            ),
            'message' => 'Barang Berhasil Diterima'
        ]);
    }   
}