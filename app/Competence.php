<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    protected $table = 'competences';
    // public $fillable = ['description'];

    public function cvs()
        {
           
                   return $this->belongsTo('App\Cv');
               
        }
}
