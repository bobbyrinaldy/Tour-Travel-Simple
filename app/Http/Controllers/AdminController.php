<?php

namespace App\Http\Controllers;

use App\Model\Booking;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	$data['waiting'] = Booking::with('user','paket')->where('is_approve','0')->take(3)->get();
    	$data['approve'] = Booking::with('user','paket')->where('is_approve','1')->take(3)->get();
    	$data['pesanan_baru'] = Booking::where('is_approve','0')->count();
    	$data['user'] = User::where('status','!-','admin')->count();
    	$data['paket'] = User::all()->count();

      	return view('backend/index',$data);
    }
}
