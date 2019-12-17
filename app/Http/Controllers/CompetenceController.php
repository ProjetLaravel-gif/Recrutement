<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use App\Competence;
class CompetenceController extends Controller
{
      public function index(){
    
    }


    public function create($cv_iid){
     
     return view('Cv.competence',['cv_iid' => $cv_iid]);
     
    }

    public function store(Request $request){
       	
       	$competence = new Competence();                 
       	$competence->description = $request->input('description');
       	$competence->cv_iid = $request->input('cv_iid');
       	$competence->save();
       	return redirect('competences');

       }
}

