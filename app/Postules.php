<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postules extends Model
{
     public function offres()
    {
        return $this->hasMany('App\Offre');
    }
}
