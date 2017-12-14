<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Hotel;
use App\Model\Package;


class HotelController extends Controller
{
    public function index($id)
    {
      $aktifitas = Hotel::where('package_id',$id)->count();
      $data['paket'] = Package::find($id);
      $data['hotel'] = Hotel::where('package_id',$id)->orderBy('nama')->get();

      if ($aktifitas == 0) {
        $data['status'] = 0;
      }else {
        $data['status'] = 1;
      }

      return view('backend/paket/hotel/index',$data);
    }

    public function create($id)
    {
      $data['paket'] = Package::find($id);

      return view('/backend/paket/hotel/create',$data);
    }

    public function save(Request $request)
    {
      $h = new Hotel;

      $h->package_id = $request->paket_id;
      $h->nama = $request->nama;
      $h->harga = $request->harga;

      $h->save();

      return redirect('/admin/paket/hotel/'.$request->paket_id);

    }

    public function edit($id_paket,$id_hotel)
    {
      $data['hotel'] = Hotel::find($id_hotel);
      $data['paket'] = Package::find($id_paket);
      

      return view('/backend/paket/hotel/edit',$data);
    }

    public function update(Request $request,$id)
    {
      $a = Hotel::find($id);

      // dd($a);

      $a->nama = $request->nama;
      $a->harga = $request->harga;

      $a->save();

      return redirect('/admin/paket/hotel/'.$request->paket_id);
    }

    public function delete($id_paket,$id_hotel)
    {
      $a = Hotel::find($id_hotel);
      $a->delete();

      return back();
    }
}
