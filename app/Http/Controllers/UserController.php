<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
      $data['u'] = \App\User::all();

      return view('backend/user/index',$data);
    }

    public function create()
    {
      return view('backend/user/create');
    }

    public function save(Request $req)
    {
      $u = new \App\User;

      $u->name = $req->nama;
      $u->username = $req->username;
      $u->email = $req->email;
      $u->password = bcrypt($req->password);
      $u->status = $req->status;
      $u->save();

      return redirect('/admin/user');
    }

    public function edit($id)
    {
      $data['u'] = \App\User::find($id);

      return view('/backend/user/edit',$data);
      
    }

    public function update(Request $req,$id)
    {
      $u = \App\User::find($id);


      $u->name = $req->nama;
      $u->username = $req->username;
      $u->email = $req->email;
      if ($req->password) {
        $u->password = bcrypt($req->password);
      }
      $u->status = $req->status;
      $u->save();

      return redirect('/admin/user');
      
    }

    public function delete($id)
    {
      $u = \App\User::find($id);

      $u->delete();

      return back();
    }
}
