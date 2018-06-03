<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
class Society extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','introduction','proprieter_name','proprieter_class','proprieter_grade','proprieter_qq','achievements','recruit','stars','type','confirmed','recruit_qq_group'
    ];

    protected $hidden = [
        'password','remember_token'
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function members()
    {
        return $this->hasMany('App\Student');
    }
}
