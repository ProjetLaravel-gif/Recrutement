<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postules extends Model
{
     public function offres()
    {
        return $this->hasMany('App\Offre');
    }


     public function recruteurs()
    {
        return $this->hasMany('App\Recruteur');
    }

      public function candidat()
    {
        return $this->hasMany('App\Candidat');
    }
}
