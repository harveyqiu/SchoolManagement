<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
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
