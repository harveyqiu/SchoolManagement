<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class SocietyLoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/society/proprieter/';

    public function username()
    {
        return 'society_id';
    }

    public function showLoginForm()
    {
        return view('society.proprieter.auth.login');
    }

    public function guard()
    {
        return auth()->guard('society');
    }
}
