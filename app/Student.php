<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
class Student extends Authenticatable
{
    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function societies()
    {
        return $this->hasMany('App\Society');
    }

    protected $fillable = [
        'class', 'grade', 'real_name', 'qq','attend_year','user_id'
    ];

    protected $hidden = [
        'password','remember_token'
    ];
}
