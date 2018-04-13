<?php

namespace App\Http\Controllers;

use App\Society;
use Illuminate\Http\Request;

class SocietyController extends Controller
{
    public function list() {
        $societies = Society::where('id','>=','0')->paginate(1);
        return view('society.societies.list',['societies'=>$societies]);
    }

    public function detail() {
        $society = Society::where('id','=,1');
        return view('society.societies.detail');
    }

    public function pre_establish() {
        return view('society.societies.establish');
    }

    public function establish() {
        return view('establish');
    }
}
