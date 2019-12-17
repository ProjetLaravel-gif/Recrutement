<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
	 use SoftDeletes;
     protected $dates = ['deleted_at'];
     public function recruteurs()
    {
        return $this->belongsTo('App\Recruteur');
    }
}
