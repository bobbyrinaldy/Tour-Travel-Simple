<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Package;

class HomeController extends Controller
{

    public function index()
    {

      $data['paket'] = Package::orderBy('created_at','desc')->get()->take(8);

      return view('/frontend/index',$data);
    }
}
