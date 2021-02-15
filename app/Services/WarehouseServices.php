<?php
namespace App\Services;

use App\Models\BagItemWarehouseOut;

/**
 * Handle All Trx on Warehouse i/o
 */
class WarehouseServices  {

    public function __construct(BagItemWarehouseOut $bagItemWarehouseOut, CRUDServices $crudService) {
        $this->bagItemWarehouseOut = $bagItemWarehouseOut;
        $this->crudService = $crudService;
    }


    /**
     * Approval Delivery Order
     * @param Array array('user_id', 'item_id)
     *
     * @return Boolean
     */
    public function ApprovalDO($params) {
        return $this->crudService->handleUpdate([
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

}
