<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LaporanController extends Controller
{
    public function index()
    {
    	$year = date('Y');
    	$data['jan'] = DB::table('bookings')
            ->join('packages', 'bookings.package_id', '=', 'packages.id')
            ->selectRaw('sum(packages.harga) as total')
            ->where('bookings.date', 'LIKE', $year.'-01%')
            ->first();
        $data['feb'] = DB::table('bookings')
            ->join('packages', 'bookings.package_id', '=', 'packages.id')
            ->selectRaw('sum(packages.harga) as total')
            ->where('bookings.date', 'LIKE', $year.'-02%')
            ->first();
        $data['mar'] = DB::table('bookings')
            ->join('packages', 'bookings.package_id', '=', 'packages.id')
            ->selectRaw('sum(packages.harga) as total')
            ->where('bookings.date', 'LIKE', $year.'-03%')
            ->first();
        $data['apr'] = DB::table('bookings')
            ->join('packages', 'bookings.package_id', '=', 'packages.id')
            ->selectRaw('sum(packages.harga) as total')
            ->where('bookings.date', 'LIKE', $year.'-04%')
            ->first();
        $data['may'] = DB::table('bookings')
            ->join('packages', 'bookings.package_id', '=', 'packages.id')
            ->selectRaw('sum(packages.harga) as total')
            ->where('bookings.date', 'LIKE', $year.'-05%')
            ->first();
        $data['jun'] = DB::table('bookings')
            ->join('packages', 'bookings.package_id', '=', 'packages.id')
            ->selectRaw('sum(packages.harga) as total')
            ->where('bookings.date', 'LIKE', $year.'-06%')
            ->first();
        $data['jul'] = DB::table('bookings')
            ->join('packages', 'bookings.package_id', '=', 'packages.id')
            ->selectRaw('sum(packages.harga) as total')
            ->where('bookings.date', 'LIKE', $year.'-07%')
            ->first();
        $data['aug'] = DB::table('bookings')
            ->join('packages', 'bookings.package_id', '=', 'packages.id')
            ->selectRaw('sum(packages.harga) as total')
            ->where('bookings.date', 'LIKE', $year.'-08%')
            ->first();
        $data['sep'] = DB::table('bookings')
            ->join('packages', 'bookings.package_id', '=', 'packages.id')
            ->selectRaw('sum(packages.harga) as total')
            ->where('bookings.date', 'LIKE', $year.'-09%')
            ->first();
        $data['oct'] = DB::table('bookings')
            ->join('packages', 'bookings.package_id', '=', 'packages.id')
            ->selectRaw('sum(packages.harga) as total')
            ->where('bookings.date', 'LIKE', $year.'-10%')
            ->first();
        $data['nov'] = DB::table('bookings')
            ->join('packages', 'bookings.package_id', '=', 'packages.id')
            ->selectRaw('sum(packages.harga) as total')
            ->where('bookings.date', 'LIKE', $year.'-11%')
            ->first();
        $data['des'] = DB::table('bookings')
            ->join('packages', 'bookings.package_id', '=', 'packages.id')
            ->selectRaw('sum(packages.harga) as total')
            ->where('bookings.date', 'LIKE', $year.'-12%')
            ->first();

    	return view('backend/laporan/index',$data);
    }

    public function paket()
    {
      $data['paket'] = \App\Model\Package::all();

      return view('backend/laporan/paket',$data);
    }

    public function print()
    {
      $data['paket'] = \App\Model\Package::all();

      return view('backend/laporan/print',$data);
    }
}
