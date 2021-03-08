<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stock;
use App\Models\Unit;
use App\Models\Category;
use App\Models\Brand;

class Item extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'items';
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

    public function stock()
    {
        return $this->hasMany(Stock::class, 'item_id', 'id');
    }

    public function Brand()
    {
        return $this->belongsTo(Brand::class, 'id', 'brand');
    }

    public function uom()
    {
        return $this->belongsTo(Unit::class, 'id', 'unit');
    }

    public function Category()
    {
        return $this->belongsTo(Category::class, 'id', 'category');
    }

    public function Brands()
    {
        return $this->hasOne(Brand::class, 'id', 'brand');
    }

    public function uoms()
    {
        return $this->hasOne(Unit::class, 'id', 'unit');
    }

    public function Categories()
    {
        return $this->hasOne(Category::class, 'id', 'category');
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
}
