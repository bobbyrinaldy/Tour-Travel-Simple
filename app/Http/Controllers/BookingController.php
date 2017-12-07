<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Package;
use App\User;
use App\Model\Booking;

class BookingController extends Controller
{
    public function index($id)
    {
    	$data['paket'] = Package::find($id);

    	return view('frontend/booking/index',$data);
    }

    public function save(Request $req)
    {
    	$b = new Booking;

    	$b->jumlah_orang = $req->jumlah;
    	$b->date = $req->date;
    	$b->package_id = $req->id_paket;
    	$b->user_id = $req->id_user;
    	$b->save();

    	return redirect('/');
    }

    public function indexAdmin()
    {
        $data['book'] = Booking::with('user','paket')->get();

        return view('backend/book/index',$data);
    }

    public function viewAdmin($id)
    {
        $data['detail'] = booking::find($id);
    }
}
