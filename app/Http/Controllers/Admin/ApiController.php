<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Services\CrudServices;
use App\Services\ItemServices;
use App\Models\BagItemWarehouseIn;
use Illuminate\Support\Facades\DB;
use App\Models\BagItemWarehouseOut;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function __construct(
        Item $items, 
        BagItemWarehouseOut $bagItemWarehouseOut, 
        BagItemWarehouseIn $bagItemWarehouseIn, 
        ItemServices $itemServices,
        CrudServices $crudServices) {

        // Services
        $this->itemServices = $itemServices;
        $this->crudService = $crudServices;

        // Model
        $this->items = $items;
        $this->bagItemWarehouseOut = $bagItemWarehouseOut;
        $this->bagItemWarehouseIn = $bagItemWarehouseIn;
    }


    // Delivery Order
    public function itemToBag(Request $request)
    {
        try {
            DB::beginTransaction();
            $item = $this->items::find($request->item_id);
            $checkItemOnBag = $this->checkItemOnBag($request);
            $itemOnBag = $this->bagItemWarehouseOut::where('warehouse_outs_id', $request->warehouse_outs_id)->get();
            // Check If Empty Item On Bag
            if (empty($checkItemOnBag)) {
                $itemOnBag = $this->bagItemWarehouseOut::create([
                    'warehouse_outs_id' => $request->warehouse_outs_id,
                    'item_id' => $request->item_id,
                    'qty' => $request->qty,
                    'user_id' => backpack_auth()->id(),
                    'flag' => 'submit'
                ]);
                
                //Result Success Create
                $result =  array(
                    'code' => 200,
                    'status' => 'success', 
                    'message' => 'Item '.$item->name. ' Berhasil Masuk Bag', 
                    'data' => array('ItemOnBag' => $itemOnBag, 'Item' => $itemOnBag->Item));
            }else{
                $updateQty = $checkItemOnBag->qty + $request->qty;

                //Check If QTY less then 0 (Zero)
                if ($updateQty < 0) {
                    $this->bagItemWarehouseOut::where(
                        array(
                            'warehouse_outs_id' => $request->warehouse_outs_id, 
                            'item_id' => $request->item_id)
                    )->delete();
                    $message = 'Menghapus Item Karena QTY Kurang Dari 0';
                } else {
                    $this->bagItemWarehouseOut::where(
                        array(
                            'warehouse_outs_id' => $request->warehouse_outs_id, 
                            'item_id' => $request->item_id)
                    )->update([
                        'qty' => $updateQty
                    ]);
                    $message = 'Item '.$item->name. ' Berhasil Menambah Quantity';
                }

                //Result Success Update
                $result = array(
                    'code' => 202,
                    'status' => 'success', 
                    'message' => $message, 
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

    //Purchase Order
    public function itemToBagIn(Request $request)
    {
        try {
            DB::beginTransaction();
            $item = $this->items::find($request->item_id);
            $checkItemOnBag = $this->itemServices->checkItemOnBagIN($request->warehouse_ins_id, $request->item_id);
            $itemOnBag = $this->bagItemWarehouseIn::where('warehouse_ins_id', $request->warehouse_ins_id)->get();

            // Check If Empty Item On Bag
            if (empty($checkItemOnBag)) {
                $data = $this->bagItemWarehouseIn::create([
                    'warehouse_ins_id' => $request->warehouse_ins_id,
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
                if ($updateQty < 0) {
                    $this->bagItemWarehouseIn::where(
                        array(
                            'warehouse_ins_id' => $request->warehouse_ins_id, 
                            'item_id' => $request->item_id)
                    )->delete();
                    $message = 'Menghapus Item Karena QTY Kurang Dari 0';

                }else{
                    $this->bagItemWarehouseIn::where(
                        array(
                            'warehouse_ins_id' => $request->warehouse_ins_id, 
                            'item_id' => $request->item_id)
                    )->update([
                        'qty' => $updateQty
                    ]);
                    $message = 'Item '.$item->name. ' Berhasil Menambah Quantity';
                }

                //Result Success Update
                $result = array(
                    'code' => 202,
                    'status' => 'success', 
                    'message' => $message, 
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

    public function checkItemOnBagInById(Request $request)
    {
        $data = $this->bagItemWarehouseIn::find($request->bag_item_warehouse_in_id);
        $data['item'] = $data->Item;
        return $data;
    }

    public function deleteItemOnBagIn(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $this->checkItemOnBagInById($request);
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

    // Approval Deliver Order 
    public function accept(Request $request)
    {
        return $this->updateService([
            'model' => $this->bagItemWarehouseOut,
            'data' => array(
                'flag' => 'accepted',
                'user_id' => backpack_auth()->id()
            ),
            'where' => array(
                'id' => $request->id,
            ),
            'message' => 'Barang Diterma & akan Diteruskan ke Delivery'
        ]);
    }
    
}
