<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use App\Experience;
class ExperienceController extends Controller
{
   public function index(){
      
      }


      public function create($cvv_id){
       
       return view('Cv.experience',['cvv_id' => $cvv_id]);
      
      }

      public function store(Request $request){
         	
         	$experiences = new Experience();                 
         	$experiences->intitule = $request->input('intitule');
         	$experiences->lieu = $request->input('lieu');
         	$experiences->description = $request->input('description');
         	$experiences->date_debut = $request->input('date_debut');
         	$experiences->date_fin = $request->input('date_fin');
         	$experiences->cvv_id = $request->input('cvv_id');
         	$experiences->save();
         	return redirect('competences/create/'.$request->input('cvv_id'));

         }
}
