<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Recruteur;
use App\Postules;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
	 use SoftDeletes;
     protected $dates = ['deleted_at'];
     
     public function recruteur()
    {
        return $this->belongsTo('App\Recruteur');
    }

      public function candidat()
    {
        return $this->belongsTo('App\Candidat');
    }

       public function postuler()
    {
        return $this->belongsTo('App\Postles');
    }
}
