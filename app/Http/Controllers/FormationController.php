<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;
use App\Cv;
class FormationController extends Controller
{

     public function index(){
   
   }


   public function create($cv_id){
    
    return view('Cv.formation',['cv_id' => $cv_id]);
    
   }

   public function store(Request $request){
      	
      	$formation = new Formation();
      	$formation->diplome = $request->input('diplome');
      	$formation->lieu = $request->input('lieu');
      	$formation->date_debut = $request->input('date_debut');
      	$formation->date_fin = $request->input('date_fin');
      	$formation->domaine = $request->input('domaine');
      	$formation->cv_id = $request->input('cv_id');
      	$formation->save();
      	return redirect('experiences/create/'.$request->input('cv_id'));

      }
      public function update(Request $request, $id){
        $formation = Formation::find($id);
        $formation->diplome = $request->input('diplome');
        $formation->lieu = $request->input('lieu');
        $formation->date_debut = $request->input('date_debut');
        $formation->date_fin = $request->input('date_fin');
        $formation->domaine = $request->input('domaine');
        $formation->cv_id = $request->input('cv_id');
        $formation->save();
         return redirect('cvs');

      public function destroy(Request $request, $id){
         $formation = Formation::find($id);
         $formation->delete();
          // $listcvs = Cv::all();
          return redirect('cvs');
    }

      public function getFormation($id){

        $cv = Cv::find($id);
        return $cv->formations;
      }
      
       public function addFormation(Request $request){
          $formation = new Formation();
          $formation->diplome = $request->diplome;
          $formation->lieu = $request->lieu;
          $formation->date_debut = $request->date_debut;
          $formation->date_fin = $request->date_fin;
          $formation->domaine = $request->domaine;
          $formation->cv_id = $request->cv_id;
          $formation->save();
          return Response()->json(['etat' => true, 'id' => $formation->id]);
       }
   } 

