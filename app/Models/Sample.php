<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    public function batch()
    {
        return $this->belongsTo('App\Models\Batch');
    }
}
