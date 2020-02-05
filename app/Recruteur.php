<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Database\Eloquent\Model;
use App\Offre;
use App\Contact;
use App\Postules;
use App\Message;
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


      public function contacts()
    {
        return $this->hasMany('App\Contact');
    }

      public function postules()
    {
        return $this->hasMany('App\Postules');
    }

    public function messages()
    {
        return $this->hasMany('App\Message');
    }
}