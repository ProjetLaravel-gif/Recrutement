<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cv extends Model
{
    // use SoftDeletes;

    // protected $dates = ['deleted_at'];
    protected $table = 'cvs';

    public function candidats()
    {
        return $this->belongsTo('App\Candidat');
    }
    public function divers()
   {
       return $this->belongsToMany('App\Diver','cvdivers','cv_id','diver_id');
   }

    public function comptences()
    {
        return $this->hasmany('App\Competence');
    }

    public function formations()
    {
        return $this->hasmany('App\Formation');
    }


    public function experiences()
    {
        return $this->hasmany('App\Experience');
    }
}
