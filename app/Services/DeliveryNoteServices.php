<?php

namespace App\Services;

use App\Models\DeliveryNote;
use App\Models\WarehouseOut;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DeliveryNoteServices  
{
    /**
     * Check All Flag or Status If all Flag is Accepted.
     *
     * @param array $listApproval
     * @param String $flag
     * @return Boolean
     */
    public function GenerateNoDeliveryNote($code, $params = array())
    {
        $warehouseOutModel = new WarehouseOut();
        $globalService = new GlobalServices();
        $crudService = new CRUDServices();
        $deliveryNoteModel = new DeliveryNote();

        $deliveryNoteNo = $globalService->generateCode($code, $warehouseOutModel, $params);
        return $crudService->handleCreate(array(
            'model' => $deliveryNoteModel,
            'data' => array(
                'kd_delivery_notes'  => $deliveryNoteNo,
                'warehouse_out_id'   => $params['warehouse_id'],
                'user_id'            => backpack_auth()->id(),
            ),
            'message' => 'Delivery Note Dengan No '.$deliveryNoteNo.' Berhasil Dibuat'
        ));
    }


}
