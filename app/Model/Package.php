<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
	public function aktivitas()
    {
        return $this->hasMany('App\Model\Activities');
    }

    public function hotel()
    {
        return $this->hasMany('App\Model\Hotel');
    }

    public function booking()
    {
        return $this->hasMany('App\Model\Booking','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
