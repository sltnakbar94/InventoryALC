<?php

namespace App\Http\Controllers\Admin\Api;

use App\Models\SubmissionForm;
use Illuminate\Http\Request;
use App\Services\CRUDServices;
use Illuminate\Support\Facades\DB;
use App\Models\SubmissionFormDetail;
use App\Http\Controllers\Controller;
use App\Services\DeliveryOrderServices;

class SubmissionFormController extends Controller
{
    public function getSubmissionFormDetailById(Request $request)
    {
        $submissionFormDetail = SubmissionFormDetail::find($request->submission_form_detail_id);
        if ($submissionFormDetail == null) {
            $return = array (
                'code' => 404,
                'error' => true,
                'message' => 'Data Tidak Ditemukan',
            );
        }else{
            $return = array (
                'code' => 200,
                'success' => true,
                'data' => $submissionFormDetail,
                'message' => 'Data Ditemukan',
            );
        }
        return $return;
    }

    public function UpdateDeliveryOrder($id, Request $request)
    {
        $form_detail = SubmissionFormDetail::findOrFail($request->submission_form_detail_id);
        $form_detail->item_id = $request->item_id;
        $form_detail->qty = $request->qty;
        $form_detail->update();

        \Alert::add('success', 'Berhasil ubah data Item')->flash();
        return redirect()->back();
    }

    /**
     * Update Delivery Order Detail by Delivery Order ID
     *
     * @param int $id
     * @param Request $request
     * @return void
     */
}
