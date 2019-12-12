<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Database\Eloquent\Model;

class Recruteur  extends Authenticatable
{
     use Notifiable;

        protected $guard = 'recruteur';

        protected $fillable = [
            'nom', 'type', 'numtel', 'adresse', 'logo', 'siteweb', 'email', 'password' ,
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     public function offres()
    {
        return $this->hasMany('App\Offre');
    }
}