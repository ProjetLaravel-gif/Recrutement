<?php

namespace App\Http\Controllers;
use App\Recruteur;
use App\Parametre;
use Illuminate\Http\Request;
use App\Contact;
use Auth;
class ContactController extends Controller
{
     public function createC($recruteur_id){

    	   return view('contact', ['recruteur_id' => $recruteur_id]);

    }

      public function storeC(Request $request){
      $contacts = new Contact();
      $contacts->nom = $request->input('nom');
      $contacts->numero = $request->input('numero');
      $contacts->email = $request->input('email');
      $contacts->objet = $request->input('objet');
      $contacts->message = $request->input('message');
      $id = Auth::guard('recruteur')->user()->id;
      $user = Recruteur::find($id);
      $contacts->recruteur_id = $id;
      $contacts->save();
      return redirect('contact');
    }

}
