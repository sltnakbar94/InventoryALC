<?php

namespace App\Http\Controllers;

use App\Services\CrudServices;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /**
     * Get Model
     * @param Collection $modelName
     * @return Collection Model
     */
    public function getModel($modelName)
    {
        return $modelName::all();
    }

    /**
     * Check Data
     * @param array $request
     * @return Boolean
     */
    public function checkService($request)
    {
        $services = new CrudServices;
        return $services->handleExists($request);
    }

    /**
     * Create Data
     * @param array $request
     * @return array with Messages
     */
    public function createService($request)
    {
        $services = new CrudServices;
        return $services->handleCreate($request);
    }

    /**
     * Delete Data
     * @param array $request
     * @return array with Messages
     */
    public function deleteService($request)
    {
        $services = new CrudServices; 
        return $services->handleDelete($request);
    }

    /**
     * Update Data
     * @param array $request
     * @return array with Messages
     */
    public function updateService($request)
    {
        $services = new CrudServices;
        return $services->handleUpdate($request);
    }

    public function returnSuccess($data, $message)
    {
        return array(
            'code' => 200,
            'success' => true,
            'data' => $data,
            'message' => $message
        );
    }

    /**
     * Return Error
     *
     * @param String $message
     * @return array with Message
     */
    public function returnError($message)
    {
        return  array (
            'code' => 400,
            'error' => true,
            'message' => $message,
        );
    }
}
