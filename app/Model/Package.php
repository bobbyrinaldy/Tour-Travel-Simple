<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
	public function aktivitas()
    {
        return $this->hasMany('App\Model\Activities');
    }
}
