<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Recruteur;
class Contact extends Model
{
      public function recruteurs()
    {
        return $this->belongsTo('App\Recruteur');
    }
}
