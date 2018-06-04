<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocietyProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.society')->only('index');
    }

    public function index() {
        return view('society.proprieter.profile');
    }
}
