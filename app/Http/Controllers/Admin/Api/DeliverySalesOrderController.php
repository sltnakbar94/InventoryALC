<?php

namespace App\Http\Controllers\Admin\Api;

use App\Models\DeliveryNote;
use Illuminate\Http\Request;
use App\Services\CRUDServices;
use App\Models\DeliveryNoteDetail;
use App\Http\Controllers\Controller;
use App\Services\DeliveryNoteServices;

class DeliverySalesOrderController extends Controller
{
    public function getDeliverySalesOrderById(Request $request)
    {
        $deliveryNoteDetail = DeliveryNoteDetail::find($request->delivery_note_id);
        if ($deliveryNoteDetail == null) {
            $return = array (
                'code' => 404,
                'error' => true,
                'message' => 'Data Tidak Ditemukan',
            );
        }else{
            $return = array (
                'code' => 200,
                'success' => true,
                'data' => $deliveryNoteDetail,
                'message' => 'Data Ditemukan',
            );
        }
        return $return;
    }
}
