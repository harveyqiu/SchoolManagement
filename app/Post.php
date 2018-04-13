<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'club_id','linkman_name','linkman_class','linkman_grade','linkman_qq','stars',
        'region','date','time','process','content','feeling','assessment'
    ];
}
