<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Package;
use Storage;

class PackageController extends Controller
{
    public function index()
    {
      $data['p'] = Package::all();
      return view('/backend/paket/index',$data);
    }

    public function create()
    {
      return view('/backend/paket/create');
    }

    public function save(Request $request)
    {
      $this->validate($request, [
        'image' => 'required|image',
      ]);

      $foto = $request->file('image');
      $foto_file = $foto->getRealPath();
      $foto_filename = $foto->getClientOriginalName();


      $p = new Package;

      $p->nama_paket = $request->nama_paket;
      $p->tujuan = $request->tujuan;
      $p->harga = $request->harga;
      $p->user_id = $request->petugas;
      $p->image = $foto_filename;
      $p->save();

      Storage::put('public/paket/' . $foto_filename, file_get_contents($foto_file));

      return back();
    }

    public function delete($id)
    {
      $p = Package::find($id);
      $p->delete();

      return back();
    }

}
