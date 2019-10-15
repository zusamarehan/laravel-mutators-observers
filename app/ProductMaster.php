<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ProductMaster extends Model
{
    public $timestamps = true;
    //
    protected $guarded = ['id'];

    /**
     *
     */
    public function setProductNameAttribute($value)
    {
        $this->attributes['product_name'] = strtolower($value);
    }

    /**
     *
     */
    public function setProductTaxAttribute($value)
    {
        $this->attributes['product_tax'] =  $value/100;
    }

    /**
     *
     */
    public function getProductTaxAttribute($value)
    {
        return $this->attributes['product_tax'] =  $value*100;
    }

    /**
     *
     */
    public function getProductNameAttribute($value)
    {
        $productAge = 'OLD';
        if($this->created_at->format('d/m/Y') == Carbon::today()->format('d/m/Y')){
            $productAge = 'NEW';
        }
        return ucfirst($value). '-'. $productAge;
    }
}
