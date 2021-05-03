<?php

namespace App\Models;

use App\Flag;
use App\Module;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'revision';
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

    public function submissionForm()
    {
        return $this->belongsTo(SubmissionForm::class, 'module_id', 'id')->where('status', '=', Flag::REVISION);
    }

    public function purchaseOrder()
    {
        return $this->belongsTo(WarehouseIn::class, 'module_id', 'id')->where('status', '=', Flag::REVISION);
    }

    public function deliveryOrder()
    {
        return $this->belongsTo(WarehouseOut::class, 'module_id', 'id')->where('status', '=', Flag::REVISION);
    }

    public function deliveryNote()
    {
        return $this->belongsTo(DeliveryNote::class, 'module_id', 'id')->where('status', '=', Flag::REVISION);
    }

    public function salesOrder()
    {
        return $this->belongsTo(SalesOrder::class, 'module_id', 'id')->where('status', '=', Flag::REVISION);
    }

    public function deliveryBySales()
    {
        return $this->belongsTo(DeliveryBySales::class, 'module_id', 'id')->where('status', '=', Flag::REVISION);
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    public function scopeSearch($query)
    {
        return $query->when($this->module_id == Module::PurchaseRequisition, function($q){
            return $q->with('submissionForm');
        })->when($this->module_id == Module::PurchaseOrder, function($q){
            return $q->with('purchaseOrder');
        })->when($this->module_id == Module::DeliveryOrder, function($q){
            return $q->with('deliveryOrder');
        })->when($this->module_id == Module::DeliveryNote, function($q){
            return $q->with('deliveryNote');
        })->when($this->module_id == Module::SalesOrder, function($q){
            return $q->with('salesOrder');
        })->when($this->module_id == Module::DeliverybySales, function($q){
            return $q->with('deliveryBySales');
        });
    }

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
}
