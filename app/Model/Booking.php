<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function paket()
    {
        return $this->belongsTo('App\Model\Package','package_id');
    }
}
