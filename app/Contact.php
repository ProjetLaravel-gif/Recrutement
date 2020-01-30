<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Recruteur;
use App\Candidat;
class Contact extends Model
{
      public function recruteur()
    {
        return $this->belongsTo('App\Recruteur');
    }

    
      public function candidat()
    {
        return $this->belongsTo('App\Candidat');
    }
}
