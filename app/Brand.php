<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    public function watches(){
        return $this->hasMany('App\Watch');
    }

    public function getNameAttribute($name){
        return ucfirst($name);
    }

    public function parent(){
        return $this->belongsTo('App\Brand', 'parent_id');
    }

    public function children(){
        return $this->hasMany('App\Brand', 'parent_id');
    }

    public function scopeRoot($query){
        return $query->where('parent_id', 0);
    }

    public function hasChildren(){
        return $this->children()->count() > 0;
    }

    public function countProducts(){
        $product = 0;
        if($this->hasChildren()){
            foreach ($this->children as $child){
                $product += $child->watches()->count();
            }
        }

        $product += $this->watches()->count();

        return $product;
    }
}
