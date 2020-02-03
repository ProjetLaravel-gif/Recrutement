<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Favori extends Model
{
    use SoftDeletes;
     protected $dates = ['deleted_at'];

         public function offre()
    {
        return $this->hasMany('App\Offre','offre_id');
    }

       public function candidat()
    {
        return $this->belongsTo('App\Candidat','candidat_id');
    }
}
