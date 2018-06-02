<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class StudentLoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/society/dashboard';
    protected $real_name;

    public function __construct()
    {
        $this->middleware('guest:student')->except('logout');
        $this->username = config('student.global.username');
    }

    public function postLogin(Request $request)
    {
        $username = $request->input('username');
    }

    public function showLoginForm()
    {
        return view('society.auth.login');
    }
}
