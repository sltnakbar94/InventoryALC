<?php

namespace App\Http\Controllers\Admin;

use App\Flag;
use App\Models\Item;
use App\Models\WarehouseIn;
use Illuminate\Http\Request;
use App\Models\BagItemWarehouseIn;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BagItemWarehouseInRequest;
use App\Models\Stock;
use App\Models\SubmissionForm;
use App\Models\SubmissionFormDetail;
use App\Services\PurchaseOrderServices;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class BagItemWarehouseInCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BagItemWarehouseInCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function __construct(PurchaseOrderServices $purchaseOrderService, BagItemWarehouseIn $purchaseOrder) {
        $this->purchaseOrderService = $purchaseOrderService;

        $this->purchaseOrder = $purchaseOrder;
    }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */

    public function store(Request $request)
    {
        $header = WarehouseIn::findOrFail($request->warehouse_in_id);
        $header_pr = $header->purchaseRequisition;
        $pr_detail_id = collect($header_pr->toArray())->all();
        $pr_details = SubmissionFormDetail::whereIn('submission_form_id', array_column($pr_detail_id, 'id'))->get();
        $item_id = collect($pr_details->toArray())->all();
        $items = Item::whereIn('id', array_column($item_id, 'item_id'))->get();
        foreach ($pr_details as $pr_detail) {
            $item = Item::find($pr_detail->item_id);
            $find = BagItemWarehouseIn::where('warehouse_in_id', '=', $request->warehouse_in_id)->where('item_id', '=', $pr_detail->item_id)->first();
            if (empty($find)) {
                $detail = new BagItemWarehouseIn;
                $detail->warehouse_in_id = $request->warehouse_in_id;
                $detail->item_id = $pr_detail->item_id;
                $detail->qty = $pr_detail->qty;
                $detail->serial = $item->serial;
                $detail->uom = $item->uom;
                $detail->user_id = backpack_auth()->id();
                $detail->save();
            } else {
                $detail = BagItemWarehouseIn::findOrFail($find->id);
                $detail->qty = $detail->qty + $pr_detail->qty;
                $detail->update();
            }

        }
        \Alert::add('success', 'Berhasil tambah item ')->flash();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $data = BagItemWarehouseIn::findOrFail($id);
        $data->delete();

        \Alert::add('success', 'Berhasil hapus data Item')->flash();
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $detail = BagItemWarehouseIn::findOrFail($request->warehouse_in_detail_id);
        $detail->qty = $request->qty;
        $detail->price = $request->price;
        if (!empty($request->discount) || $request->discount == 0) {
            $detail->discount = $request->discount;
            $detail->sub_total = (($request->discount/100*$request->price)+$request->price)*$request->qty;
        }else{
            $detail->sub_total = $request->price*$request->qty;
        }
        $detail->update();

        \Alert::add('success', 'Berhasil ubah data Item')->flash();
        return redirect()->back();
    }

    public function qc(Request $request)
    {
        $detail = BagItemWarehouseIn::findOrFail($request->warehouse_in_detail_id);
        $detail->qty_confirm = $request->qty_confirm;
        $detail->status = Flag::COMPLETE;
        $detail->confirm_user_id = backpack_auth()->id();
        $detail->update();
        $check_stock = Stock::where('warehouse_id', '=', $detail->warehouse_in_id)->where('item_id', '=', $detail->item_id)->first();
        $stock = Stock::findOrFail($check_stock->id);
        $stock->stock_in_indent -= $request->qty_confirm;
        $stock->stock_on_location += $request->qty_confirm;
        $check = BagItemWarehouseIn::where('warehouse_in_id', '=', $detail->warehouse_in_id)->where('status', '=', Flag::PROCESS)->first();
        if(empty($check)){
            $header = WarehouseIn::findOrFail($detail->warehouse_in_id);
            $header->status = Flag::COMPLETE;
            $header_pr = $header->purchaseRequisition;
            $pr_detail_id = collect($header_pr->toArray())->all();
            $pr_details = SubmissionFormDetail::whereIn('submission_form_id', array_column($pr_detail_id, 'id'))->get();
            foreach ($header_pr as $prerequisition) {
                $head_pr = SubmissionForm::findOrFail($prerequisition->id);
                $head_pr->status = Flag::COMPLETE;
                $head_pr->update();
            }
            foreach ($pr_details as $pr_detail) {
                $detail_pr = SubmissionFormDetail::findOrFail($pr_detail->id);
                $detail_pr->status = Flag::COMPLETE;
                $detail_pr->update();
            }
            $stock->update();
            $header->update();
        }

        \Alert::add('success', 'Berhasil memvalidasi '. $detail->Item->name)->flash();
        return redirect()->back();
    }
}
