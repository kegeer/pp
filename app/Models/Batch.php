<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $guarded = ['_token'];

//    public function setSendTimeAttribute()
//    {
//        return strtotime($this->send_time);
//    }
//
//    public function setArriveTimeAttribute()
//    {
//        return strtotime($this->arrive_time);
//    }

    public function samples()
    {
        return $this->hasMany('App\Models\Sample');
    }
}
