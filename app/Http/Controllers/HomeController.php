<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Package;
use App\User;
use Hash;
use Session;
use Validator;
use DB;

class HomeController extends Controller
{

    public function index()
    {

      $data['paket'] = Package::orderBy('created_at','desc')->get()->take(8);

      return view('/frontend/index',$data);
    }

    public function view()
    {
      return view('auth/change');
    }

    public function change(Request $req,$id)
    {
      $this->validate($req, [
        'oldPass' => 'required',
        'password' => 'required|string|min:6|confirmed',
    ]);

      $u = user::find($id);

      $oldPass = $req->oldPass;
      $check = Hash::check($oldPass, $u->password);

      if ($check) {
        DB::table('users')
            ->where('id', $id)
            ->update(['password' => bcrypt($req->password)]);

        Session::flash('success', 'Password Successfully Changed');
        return back();
      }else {
        Session::flash('fail', 'Your old Password is not correct!');
        return back();
      }

    }
}
