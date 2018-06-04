<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
class Student extends Authenticatable
{
    public function societies()
    {
        return $this->belongsToMany('App\Society');
    }

    protected $fillable = [
        'class', 'grade', 'real_name', 'qq','attend_year','user_id'
    ];

    protected $hidden = [
        'password','remember_token'
    ];
}
