<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected function redirectTo()
      {
        if (auth::user()->status == 'admin') {
          return '/admin';
        }elseif (auth::user()->status == 'user') {
          return '/user';
        }
      }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
      return 'username';
    }
}
