<?php

namespace App\Http\Controllers;
use App\Recruteur;
use App\Parametre;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Contact;
use Auth;
class ContactController extends Controller
{
     public function createC($id){

   return view('contact', ['recruteur_id' => $id]);

    }

      public function storeC(Request $request){
      $contacts = new Contact();
      $contacts->nom = $request->input('nom');
      $contacts->numero = $request->input('numero');
      $contacts->email = $request->input('email');
      $contacts->objet = $request->input('objet');
      $contacts->message = $request->input('message');
      $contacts->recruteur_id = $request->input('recruteur_id');
      $contacts->save();
      return redirect('contact');
    }


    public function message(){

      $id = Auth::guard('recruteur')->user()->id;
      $user = Recruteur::find($id);
      $contacts = $user->contacts;
      return view('message' , ['contacts' => $contacts]);

    }

}
