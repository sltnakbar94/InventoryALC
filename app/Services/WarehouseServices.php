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
        $approve = $this->crudService->handleUpdate([
            'model' => $this->bagItemWarehouseOut,
            'data' => array(
                'flag' => 'accepted',
                'user_id' => $params['user_id']
            ),
            'where' => array(
                'id' => $params['item_id'],
            ),
            'message' => 'Barang Diterma & akan Diteruskan ke Delivery'
        ]);

        if ($approve['code'] == 200) return $this->itemService->RemoveQTYItemFromPO($item->item_id, $item->qty);
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

    public function CheckStockItem($item_id, $wo_id)
    {
        $qty_on_wo = $this->bagItemWarehouseOut::where(array('warehouse_outs_id' => $wo_id, 'item_id' => $item_id))->first();
        if ($qty_on_wo->qty_confirm == 0) {
            $qty = $qty_on_wo->qty;
        }else{
            $qty = $qty_on_wo->qty;
        }

        if ($qty < $this->itemService->cekQtyItem($item_id)) {
            return false;
        }else{
            return true;
        }
    }

}
