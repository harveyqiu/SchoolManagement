<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/society/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function username() {
        return 'login_name';
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
