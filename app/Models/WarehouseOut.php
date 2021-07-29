<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\BagItemWarehouseOut;
use App\Models\Stackholder;

class WarehouseOut extends Model
{
    use CrudTrait, SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'warehouse_outs';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function warehouseOutDetail()
    {
        return $this->hasMany(WOutDetail::class, 'warehouse_out_id', 'id')->orderby('created_at', 'desc');
    }

    public function details()
    {
        return $this->hasMany(BagItemWarehouseOut::class, 'warehouse_out_id', 'id')->orderby('created_at', 'desc');
    }

    public function supplier()
    {
        return $this->belongsTo(Stackholder::class, 'supplier_id', 'id');
    }

    public function customer()
    {
        return $this->belongsTo(Stackholder::class, 'customer_id', 'id');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    public function setUploadrefAttribute($value)
    {
        $attribute_name = "uploadref";
        $disk = "public";
        $destination_path = "delivery_order/uploadref";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }
}
