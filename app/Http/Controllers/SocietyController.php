<?php

namespace App\Http\Controllers;

use App\Society;
use Illuminate\Http\Request;

class SocietyController extends Controller
{
    public function list() {
        $societies = Society::where('id','>=','0')->paginate(10);
        return view('society.societies.list',['societies'=>$societies]);
    }

    public function detail($society_id) {
        $society = Society::where('society_id',$society_id)->get()->first();
        return view('society.societies.detail',['society'=>$society]);
    }

    public function establish() {
        return view('society.societies.establish');
    }

    public function check_establish() {
        return view('welcome');
    }

    public function listForAdmin() {
        $societies = Society::where('id','>=','0')->paginate(10);
        return view('society.admin.societies.list',['societies'=>$societies]);
    }

    public function detailForAdmin($id) {
        $society = Society::find($id);
        return view('society.admin.societies.detail',['society'=>$society]);
    }

    public function join() {
        return view('welcome');
    }

    public function unconfirmedListForAdmin() {
        $societies = Society::where('confirmed',False)->paginate(10);
        return view('society.admin.societies.list',['societies'=>$societies]);
    }
}
