<?php

namespace App\Http\Controllers\Admin\Api;

use App\Models\InvoiceDetail;
use Illuminate\Http\Request;
use App\Services\CRUDServices;
use App\Http\Controllers\Controller;
use App\Models\Item;

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
        $item = Item::find($form_detail->item_id);
        if (empty($request->price*$item->netto)) {
            \Alert::add('danger', 'Netto pada item kosong')->flash();
        return redirect()->back();
        }
        $form_detail->qty = $request->qty;
        $form_detail->price = $request->price;
        $form_detail->discount = $request->discount;
        $form_detail->price_sum = $request->price*$item->netto*$request->qty;
        $form_detail->price_after_discount = $form_detail->price_sum-($form_detail->price_sum*$request->discount/100);
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
