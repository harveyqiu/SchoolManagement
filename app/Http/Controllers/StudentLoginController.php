<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class StudentLoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/society/dashboard/';

//    public function __construct()
//    {
//
//    }

    public function username()
    {
        return 'user_id';
    }

    public function showLoginForm()
    {
        return view('society.auth.login');
    }

    public function guard()
    {
        return auth()->guard('student');
    }
}
