<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocietyProfileController extends Controller
{
    public function index() {
        return view('society.proprieter.profile');
    }
}
