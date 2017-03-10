<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = ['name'];

    const ROLE_ADMIN = 1;

    public function getNameAttribute($name){
        return ucfirst($name);
    }
}
