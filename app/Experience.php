<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences';
       // public $fillable = ['intitule','lieu','description','date_debut','date_fin'];

       public function cvs()
            {
               
                       return $this->belongsTo('App\Cv');
                   
            }
}
