<?php

namespace App\Http\Controllers;

use App\Recruteur;
use App\Candidat;
use App\Offre;
use App\Parametre;
use Illuminate\Http\UploadedFile;
use Auth;
use App\Contact;
use App\Postules;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    public function mesjobs(Request $request){
      $id = Auth::guard('recruteur')->user()->id;
      $user = Recruteur::find($id);
      $offres = $user->offres()->paginate(5);
      return view('offres.mesjobs' , ['offres' => $offres]);
    }

     public function indexo1(){
     
      //$offres = new Offre();
      //$id = Auth::guard('recruteur')->user()->id;
      // $offres->recruteur_id = $id;
      // $offres->save();
      // $listoffres = Offre::find($id);
      $listoffres = Offre::all();
      return view('offres.indexo1' , ['offres' => $listoffres]);
    }


    public function createo($recruteur_id){

    	   return view('offres.createo', ['recruteur_id' => $recruteur_id]);
    	 // return view('offres.createo');

    }


      public function detail($id){

       $offres = Offre::find($id);
       return view('offres.detail', ['offres' => $offres]);
    }

     public function cdetail($id){

       $offres = Offre::find($id);
       return view('offres.cdetail', ['offres' => $offres]);
    }



    public function storeo(Request $request){
      $offres = new Offre();
      $offres->intitule = $request->input('intitule');
      $offres->type = $request->input('type');
      $offres->dommaine = $request->input('dommaine');
      $offres->dimplome = $request->input('dimplome');
      $offres->nbr_annee_experiences = $request->input('nbr_annee_experiences');
      $offres->competences = $request->input('competences');
      $offres->renumeration = $request->input('renumeration');
      $offres->duree = $request->input('duree');
      $offres->date_debut_prevu = $request->input('date_debut_prevu');
      $offres->ville = $request->input('ville');
      $offres->cartier = $request->input('cartier');
      $offres->emplacement= $request->input('emplacement');
      $offres->description = $request->input('description');
      $offres->webaddresse = $request->input('webaddresse');
      $id = Auth::guard('recruteur')->user()->id;
      $user = Recruteur::find($id);
      $offres->recruteur_id = $id;
      $offres->save();
      return redirect('offres');
    }

    public function edito($id){

       $offres = Offre::find($id);
       return view('offres.edito', ['offres' => $offres]);
    }
    public function updateo(Request $request, $id){
      $offres = Offre::find($id);
      $offres->intitule = $request->input('intitule');
      $offres->type = $request->input('type');
      $offres->dommaine = $request->input('dommaine');
      $offres->dimplome = $request->input('dimplome');
      $offres->nbr_annee_experiences = $request->input('nbr_annee_experiences');
      $offres->competences = $request->input('competences');
      $offres->renumeration = $request->input('renumeration');
      $offres->duree = $request->input('duree');
      $offres->date_debut_prevu = $request->input('date_debut_prevu');
      $offres->ville = $request->input('ville');
      $offres->cartier = $request->input('cartier');
      $offres->emplacement= $request->input('emplacement');
      $offres->description = $request->input('description');
      $offres->webaddresse = $request->input('webaddresse');
      $id = Auth::guard('recruteur')->user()->id;
      $user = Recruteur::find($id);
      $offres->recruteur_id = $id;
      $offres->save();
      return redirect('offres');

    }
    public function destroyo(Request $request, $id){
        $offres = Offre::find($id);
        $offres->delete();
         $listoffres = Offre::all();
         return redirect('offres');
    }


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
      $id = Auth::guard('candidat')->user()->id;
      $user = Candidat::find($id);
      $contacts->candidat_id = $id;
      $contacts->save();
      $listoffres = Offre::all();
      return view('offres.indexo1' , ['offres' => $listoffres]);
    }


     public function message(Request $request){

      $id = Auth::guard('recruteur')->user()->id;
      $user = Recruteur::find($id);
      $contacts = $user->contacts;
      return view('message' , ['contacts' => $contacts]);

    }




     public function postuler(Request $request){
         $postuler = new Postules();
         $postuler->message = $request->input('message');

          if($request->cv){

                $fileNameWithExt = $request->file('cv')->getClientOriginalName();
                $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('cv')->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $path = $request->file('cv')->storeAs('cv',$fileNameToStore);
                $postuler->cv = $fileNameToStore;
                }

         
      
      $id = Auth::guard('candidat')->user()->id;
      $postuler->candidat_id = $id;
      
      $postuler->offres_id = $request->input('offres_id');
      $postuler->save();
      return redirect('listoffres');
     }


     public function voir(){
       $id = Auth::guard('recruteur')->user()->id;
      $user = Recruteur::find($id);
      $Postules = $user->postuler;
        return view('offres.offrecandidat' , ['Postules' => $Postules]);
     }

}

 
  