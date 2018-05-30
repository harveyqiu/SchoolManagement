<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProprieterDashboardController extends Controller
{
    public function index() {
        return view('society.proprieter.dashboard');
    }
}
