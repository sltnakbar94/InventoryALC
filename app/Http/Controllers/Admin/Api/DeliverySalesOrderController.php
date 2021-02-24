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
    public function __construct(
        DeliveryNoteDetail $deliveryNoteDetail,
        DeliveryNote $deliveryNote,

        CRUDServices $crudService,
        DeliveryNoteServices $deliveryNoteService

        ) {
        $this->deliveryNoteDetail = $deliveryNoteDetail;
        $this->deliveryNote = $deliveryNote;

        $this->crudService = $crudService;
        $this->deliveryNoteService = $deliveryNoteService;
    }

    public function getDeliverySalesOrderById(Request $request)
    {
        dd($request);
    }
}
