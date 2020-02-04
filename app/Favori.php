<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Offre;
class Favori extends Model
{
    use SoftDeletes;
     protected $dates = ['deleted_at'];

        public function offres()
    {
        return $this->hasMany('App\Offre');
    }

       public function candidat()
    {
        return $this->belongsTo('App\Candidat','candidat_id');
    }
}
