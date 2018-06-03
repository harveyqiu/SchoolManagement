<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.student:student');
    }

    public function index(Request $request) {
        return view('society.dashboard.index',['user_id'=>$request->user()->user_id,'real_name'=>$request->user()->real_name]);
    }
}
