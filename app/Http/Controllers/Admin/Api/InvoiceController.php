<?php

namespace App\Http\Controllers\Admin\Api;

use App\Models\InvoiceDetail;
use Illuminate\Http\Request;
use App\Services\CRUDServices;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function getInvoiceDetailById(Request $request)
    {
        $InvoiceDetail = InvoiceDetail::find($request->invoice_detail_id);
        if ($InvoiceDetail == null) {
            $return = array (
                'code' => 404,
                'error' => true,
                'message' => 'Data Tidak Ditemukan',
            );
        }else{
            $return = array (
                'code' => 200,
                'success' => true,
                'data' => $InvoiceDetail,
                'message' => 'Data Ditemukan',
            );
        }
        return $return;
    }

    public function UpdateInvoiceDetail($id, Request $request)
    {
        $form_detail = InvoiceDetail::findOrFail($request->invoice_detail_id);
        $form_detail->qty = $request->qty;
        $form_detail->price = $request->price;
        $form_detail->discount = $request->discount;
        $form_detail->price_sum = $request->price_sum;
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
