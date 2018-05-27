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
        'classroom', 'grade', 'realname', 'qq','attend_year','user_id'
    ];

    protected $hidden = [
        'password','remember_token'
    ];
}
