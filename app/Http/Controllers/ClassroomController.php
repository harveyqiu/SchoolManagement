<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function listForAdmin(){
        return view('society.admin.classroom');
    }
}
