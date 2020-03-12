<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ride extends Model
{
    //
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function cars()
    {
        return $this->belongsTo('App\User');
    }

}
