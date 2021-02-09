<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BagItemWarehouseOut;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function __construct(Item $items, BagItemWarehouseOut $bagItemWarehouseOut) {
        $this->items = $items;
        $this->bagItemWarehouseOut = $bagItemWarehouseOut;
    }

    public function itemToBag(Request $request)
    {
        try {
            DB::beginTransaction();
            $item = $this->items::find($request->item_id);
            $checkItemOnBag = $this->checkItemOnBag($request);
            $itemOnBag = $this->bagItemWarehouseOut::where('warehouse_outs_id', $request->warehouse_outs_id)->get();

            // Check If Empty Item On Bag
            if (empty($checkItemOnBag)) {
                $data = $this->bagItemWarehouseOut::create([
                    'warehouse_outs_id' => $request->warehouse_outs_id,
                    'item_id' => $request->item_id,
                    'qty' => $request->qty
                ]);
                
                //Result Success Create
                $result =  array(
                    'code' => 200,
                    'status' => 'success', 
                    'message' => 'Item '.$item->name. ' Berhasil Masuk Bag', 
                    'data' => array('ItemOnBag' => $data, 'Item' => $data->Item));
            }else{
                $updateQty = $checkItemOnBag->qty + $request->qty;
                $this->bagItemWarehouseOut::where(
                    array(
                        'warehouse_outs_id' => $request->warehouse_outs_id, 
                        'item_id' => $request->item_id)
                )->update([
                    'qty' => $updateQty
                ]);

                //Result Success Update
                $result = array(
                    'code' => 202,
                    'status' => 'success', 
                    'message' => 'Item '.$item->name. ' Berhasil Menambah Quantity', 
                    'data' => array('itemOnBag' => $itemOnBag, 'qty' => $updateQty));
            }
            // End Check If Empty Item On Bag


            DB::commit();
            return $result;
        } catch (\Throwable $th) {
            DB::rollback();
            return $th->getMessage();
        }
    }

    public function checkItemOnBag($request)
    {
        $check = $this->bagItemWarehouseOut::where(array(
            'warehouse_outs_id' => $request->warehouse_outs_id, 
            'item_id' => $request->item_id))->first();
        return $check; 
    }

    public function checkItemOnBagById(Request $request)
    {
        $data = $this->bagItemWarehouseOut::find($request->bag_item_warehouse_out_id);
        $data['item'] = $data->Item;
        return $data;
    }

    public function deleteItemOnBag(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $this->checkItemOnBagById($request);
            $item = $this->items::find($data->item_id);
            $data->delete();
            DB::commit();
            $result =  array(
                'code' => 200,
                'status' => 'success', 
                'message' => $item->name. ' Berhasil Dihapus dari Bag', 
            );
        } catch (\Throwable $th) {
            DB::rollBack();
            $result =  array(
                'code' => 400,
                'status' => 'error', 
                'message' => 'Something Went Wrong! bcs '.$th->getMessage(), 
            );
        }
        return $result;
    }

    public function items()
    {
        return $this->items::all();
    }

    
}
