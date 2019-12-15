<?php

namespace App\Http\Controllers;

use App\Recruteur;
use App\Offre;
use App\Parametre;
use Illuminate\Http\UploadedFile;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    public function indexo(Request $request){
        $id = Auth::guard('recruteur')->user()->id;
      $user = Recruteur::find($id);
       $offres = $user->offres;
      return view('offres.indexo' , ['offres' => $offres]);
    }

     public function indexo1(){

       $listoffres = Auth::guard('recruteur')->user()->offres;
       $listoffres = Offre::all();
      return view('offres.indexo' , ['offres' => $listoffres]);
    }


    public function createo($recruteur_id){

    	   return view('offres.createo', ['recruteur_id' => $recruteur_id]);
    	 // return view('offres.createo');

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
         return view('offres.indexo', ['offres' => $offres]);
    }
}
