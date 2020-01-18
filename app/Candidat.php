<?php

namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Database\Eloquent\Model;

class Candidat extends Authenticatable
{
     use Notifiable;

        protected $guard = 'recruteur';

        protected $fillable = [
            'nom', 'prenom', 'civilite', 'datenaiss', 'numtel', 'linkedlin', 'email', 'password' ,
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
        protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function comptences()
    {
        return $this->hasmany('App\Competence');
    }
   public function cvs()
   {
       return $this->hasmany('App\Cv');
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
