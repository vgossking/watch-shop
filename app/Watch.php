<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watch extends Model
{
    //
    protected $fillable = [
        'name',
        'shape',
        'size',
        'bezel_material',
        'band_material',
        'quantity',
        'price',
        'discount_price',
        'brand_id'
    ];

    public function isAvailable(){
        if($this->quantity <= 0){
            return false;
        }
        return true;
    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }

    public function getShapeAttribute($shape){
        return ucfirst($shape);
    }

    public function getBezelMaterialAttribute($material){
        return ucfirst($material);
    }

    public function getBandMaterialAttribute($material){
        return ucfirst($material);
    }

    public function categories(){
        return $this->belongsToMany('App\Category');
    }
}
