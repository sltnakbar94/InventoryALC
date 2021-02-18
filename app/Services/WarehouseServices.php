<?php
namespace App\Services;

use App\Models\BagItemWarehouseIn;
use App\Models\BagItemWarehouseOut;
use App\Models\Item;
use GuzzleHttp\Psr7\Request;

/**
 * Handle All Trx on Warehouse i/o
 */
class WarehouseServices  {

    public function __construct(
        BagItemWarehouseOut $bagItemWarehouseOut, 
        BagItemWarehouseIn $bagItemWarehouseIn,

        CRUDServices $crudService,
        ItemServices $itemService) {
        $this->bagItemWarehouseOut = $bagItemWarehouseOut;
        $this->bagItemWarehouseIn = $bagItemWarehouseIn;

        $this->crudService = $crudService;
        $this->itemService = $itemService;
    }

    /**
     * Approval Delivery Order
     * @param Array array('user_id', 'item_id)
     *
     * @return Boolean
     */
    public function ApprovalDO($params) {
        $item = $this->GetItemByWarehouseID($params['item_id'], $this->bagItemWarehouseOut);
        $qty = ($item->qty_confirm == 0 ? $item->qty : $item->qty_confirm);
        $checkQtyOnBag = $this->CheckStockItem($qty, $params['item_id']);
        if ($checkQtyOnBag) {
            $approve = $this->crudService->handleUpdate([
                'model' => $this->bagItemWarehouseOut,
                'data' => array(
                    'flag' => 'accepted',
                    'user_id' => $params['user_id']
                ),
                'where' => array(
                    'id' => $params['item_id'],
                ),
                'message' => 'Diterima dan tidak bisa di Edit'
            ]);
            return $this->itemService->RemoveQTYItemFromDO($item->item_id, $item->qty);
        }else{
            return array(
                'code' => 400,
                'status' => 'error',
                'message' => 'Kuantiti Melebihi Item Stock',
            );
        }
    }

    /**
     * Decline Deliver Order
     *
     * @param Array array('user_id', 'item_id)
     * @return Boolean
     */
    public function DeclineDO($params)
    {
        return $this->crudService->handleUpdate([
            'model' => $this->bagItemWarehouseOut,
            'data' => array(
                'flag' => 'decline',
                'user_id' => $params['user_id']
            ),
            'where' => array(
                'id' => $params['item_id'],
            ),
            'message' => 'Barang Ditolak & tidak Diteruskan ke Delivery'
        ]);
    }

/** ============================PURCHASE ORDER========================================= */
    /**
     * Approval Purchase Order
     *
     * @param array array('user_id', 'item_id')
     * @return void
     */
    public function ApprovalPO($params)
    {
        $item = $this->GetItemByWarehouseID($params['item_id'], $this->bagItemWarehouseIn);
        $approve = $this->crudService->handleUpdate([
            'model' => $this->bagItemWarehouseIn,
            'data' => array(
                'flag' => 'accepted',
                'user_id' => $params['user_id'],
                'qty_confirm' => $item->qty
            ),
            'where' => array(
                'id' => $params['item_id'],
            ),
            'message' => 'Barang Berhasil Diterima'
        ]);
        if ($approve['code'] == 200) return $this->itemService->AddQTYItemFromPO($item->item_id, $item->qty);
    }

    /**
     * Decline Purchase Order
     *
     * @param array array('user_id', 'item_id')
     * @return void
     */
    public function DeclinePO($params)
    {
        return $this->crudService->handleUpdate([
            'model' => $this->bagItemWarehouseIn,
            'data' => array(
                'flag' => 'decline',
                'user_id' => $params['user_id']
            ),
            'where' => array(
                'id' => $params['item_id'],
            ),
            'message' => 'Barang Berhasil Ditolak'
        ]);
    }

    /**
     * Get Item By ID
     *
     * @param int $item_id,
     * @param Collection $model
     * @return Collection
     */
    public function GetItemByWarehouseID($item_id, $model)
    {
        return $model::find($item_id);
    }

    /**
     * Check Stock Item on Bag by Item_ID, Warehouse_Out_ID
     *
     * @param int $qtyBag
     * @param inte $qtyITem
     * @return boolean
     */
    public function CheckStockItem($qtyBag, $item_id)
    {
        $item = $this->itemService->cekQtyItem($item_id);
        if ($qtyBag > $item) {
            return false;
        }else{
            return true;
        }
    }

}
