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
}
