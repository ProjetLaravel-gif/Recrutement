<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
   protected $table = 'formations';

   public function cvs()
        {
          return $this->belongsTo('App\Cv');
               
        }
}
