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

    public function detail($id) {
        $society = Society::find($id);
        return view('society.societies.detail',['society'=>$society]);
    }

    public function pre_establish() {
        return view('society.societies.establish');
    }

    public function establish() {
        return view('establish');
    }
}
