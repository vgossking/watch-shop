<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'role_id',
        'is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFullName(){
        return $this->first_name.' '.$this->last_name;
    }

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function isAdmin(){

        if($this->role_id == Role::ROLE_ADMIN){
            return true;
        }
        return false;
    }
}
