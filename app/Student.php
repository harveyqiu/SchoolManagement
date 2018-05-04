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
        # set a many to many relationship
        return 0;
    }

    protected $fillable = [
        'classroom', 'grade', 'realname', 'qq','attend_year'
    ];
}
