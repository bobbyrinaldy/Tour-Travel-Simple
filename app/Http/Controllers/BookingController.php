<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Package;
use App\User;
use App\Model\Booking;
use Response;
use Mail;
use DB;
use Storage;
use Session;

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

    	$response = array(
            'status' => 'success',
            'msg' => 'Your reservation has been saved, please check email for 3x24 hour',
        );
        return Response::json($response);
    }

    public function indexAdmin()
    {
        $data['book'] = Booking::with('user','paket')->where('is_approve','0')->get();

        return view('backend/book/index',$data);
    }

    public function viewAdmin($id)
    {
        $data['detail'] = booking::find($id);
    }

    public function approve($id)
    {
        $book = booking::with('user')->where('id',$id)->first();

        DB::table('bookings')
            ->where('id', $id)
            ->update(['is_approve' => 1]);

        $data = array(
            'from' => 'iqi.tour.travel@mail.com',
            'from_name' => 'IQI TOUR & TRAVEL',
            'nama' =>$book->user->name,
            'id' =>$book->user->id,
            'id_book' =>$book->id,
            'email' =>$book->user->email,
        );

        Mail::send( 'mail', $data, function( $message ) use ($data)
        {
            $message->to($data['email'])->from( $data['from'], $data['from_name'] )->subject( 'Pesanan anda disetujui!' );
        });

        return back();
    }

    public function decline($id)
    {
        $book = booking::with('user')->where('id',$id)->first();

        DB::table('bookings')
            ->where('id', $id)
            ->update(['is_approve' => 2]);

        $data = array(
            'from' => 'iqi.tour.travel@mail.com',
            'from_name' => 'IQI TOUR & TRAVEL',
            'nama' =>$book->user->name,
            'email' =>$book->user->email,

        );

        Mail::send( 'mail_decline', $data, function( $message ) use ($data)
        {
            $message->to($data['email'])->from( $data['from'], $data['from_name'] )->subject( 'Pesanan anda ditolak!' );
        });
        return back();
    }

    public function indexApprove()
        {
            $data['book'] = Booking::with('user','paket')->where('is_approve','1')->get();

            return view('backend/book/index',$data);
        }

    public function indexDecline()
        {
            $data['book'] = Booking::with('user','paket')->where('is_approve','2')->get();

            return view('backend/book/index',$data);
        }

    public function konfirmasi($id)
    {
      $data['book'] = Booking::with('user','paket')->where('id',$id)->first();

      return view('backend/konfirmasi/upload',$data);
    }

    public function indexKonfirmasi()
    {
      $data['book'] = Booking::with('user','paket')->where('is_approve','1')->get();

      return view('backend/konfirmasi/index',$data);
    }

    public function saveKonfirmasi(Request $req,$id)
    {
      $book = booking::find($id);

      $this->validate($req, [
        'foto' => 'required|image',
      ]);

      $foto = $req->file('foto');
      $foto_file = $foto->getRealPath();
      $foto_filename = $foto->getClientOriginalName();

      $book->is_confirm = 1;
      $book->foto = $foto_filename;
      $book->save();

      Storage::put('public/bukti/' . $foto_filename, file_get_contents($foto_file));

      Session::flash('success', 'Upload Successfully');

      return back();

    }
}
