<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected function redirectTo()
    {
        if (auth::user()->status == 'admin') {
          return '/admin';
        }else {
          return '/';
        }
    }

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {

      Validator::extend('without_spaces', function($attr, $value){
          return preg_match('/^\S*$/u', $value);
      });
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|without_spaces|max:20|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
