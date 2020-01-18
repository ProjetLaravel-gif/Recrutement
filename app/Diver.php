<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diver extends Model
{
    public function cvs()
        {
            return $this->belongsToMany('App\Cv','cvdivers','diver_id','cv_id');
        }
}
