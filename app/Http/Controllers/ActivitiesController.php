<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Package;
use App\Model\Activities;


class ActivitiesController extends Controller
{
    public function index($id)
    {
      $aktifitas = Activities::where('package_id',$id)->count();
      $data['paket'] = Package::find($id);
      $data['aktivitas'] = Activities::where('package_id',$id)->orderBy('nama_aktivitas')->get();

      if ($aktifitas == 0) {
        $data['status'] = 0;
      }else {
        $data['status'] = 1;
      }

      return view('backend/paket/aktivitas/index',$data);
    }

    public function create($id)
    {
      $data['paket'] = Package::find($id);

      return view('/backend/paket/aktivitas/create',$data);
    }

    public function save(Request $request)
    {
      $ac = new Activities;

      $ac->package_id = $request->paket_id;
      $ac->nama_aktivitas = $request->nama_aktivitas;
      $ac->hari_ke = $request->hari_ke;
      $ac->jam = $request->jam;
      $ac->keterangan = $request->keterangan;

      $ac->save();

      return redirect('/admin/paket/aktivitas/'.$request->paket_id);

    }

    public function edit($id_paket,$id_aktivitas)
    {
      $data['aktivitas'] = Activities::find($id_aktivitas);
      $data['paket'] = Package::find($id_paket);

      return view('/backend/paket/aktivitas/edit',$data);
    }

    public function update(Request $request,$id)
    {
      $a = Activities::find($id);

      // dd($a);

      $a->nama_aktivitas = $request->nama_aktivitas;
      $a->hari_ke = $request->hari_ke;
      $a->jam = $request->jam;
      $a->keterangan = $request->keterangan;

      $a->save();

      return redirect('/admin/paket/aktivitas/'.$request->paket_id);
    }

    public function delete($id_paket,$id_aktivitas)
    {
      $a = Activities::find($id_aktivitas);
      $a->delete();

      return back();
    }
}
