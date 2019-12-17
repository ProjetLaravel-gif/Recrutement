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
   } 

