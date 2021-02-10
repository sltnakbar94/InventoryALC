<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CRUDServices 
{
    /**
     * handleExists for Check Data
     * @param $params
     * @return void
     */
    public function handleExists($request)
    {
        $data = $request['model']::where($request['data'])->get();
        if ($data->count() == 0) {
            return false;
        }else{
            return true;
        }
    }

    /**
     * handleCreate for Insert Data
     * @param $params
     * @return void
     */
    public function handleCreate($request)
    {
        try {
            DB::beginTransaction();
            $data = $request['model']::create($request['data']);
            DB::commit();
            if ($data->name != null) {
                return redirect()->back()->with(['success' => $request['pageTitle'].': <strong>' . $data->name . '</strong> Ditambahkan']);
            }else{
                return redirect()->back()->with(['success' => $request['pageTitle'].': <strong>' . $request['message'] . '</strong> Ditambahkan']);
            }
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with(['error' => $th->getMessage()]);
        }
    }

    /**
     * handleUpdate for Update Data
     * @param $params
     * @return void
     */
    public function handleUpdate($request)
    {
        try {
            DB::beginTransaction();
            $data = $request['model']::where($request['where']);
            if (empty($data->get())) {
                throw new \Throwable("Data Tidak Ditemukan.");
            }
            $data->update($request['data']);
            DB::commit();
            return array(
                'code' => 200,
                'status' => 'success',
                'message' => 'Berhasil '.$request['message'].' Update',
            );
        } catch (\Throwable $th) {
            DB::rollback();
            return array(
                'code' => 400,
                'status' => 'fail',
                'message' => 'Gagal Update bcs '.$th->getMessage().' ',
            );
        }
    }

    
    /**
     * handleUpdate for Delete Data
     * @param $params
     * @return void
     */
    public function handleDelete($request)
    {
        try {
            DB::beginTransaction();
            $data = $request['model']::where($request['where'])->first();
            $data->delete();
            DB::commit();
            return redirect()->back()->with(['success' => $request['pageTitle'].' : ' . 'Berhasil Dihapus']);
        } catch (\Throwable $th) {
            DB::rollback();
            Log::error($th);
            return redirect()->back()->with(['error' => $th->getMessage()]);
        }
    }
}
