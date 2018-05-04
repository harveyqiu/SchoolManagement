<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','introduction','proprieter_name','proprieter_class','proprieter_grade','proprieter_qq','achievements','recruit','stars','type','confirmed'
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
