<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use App\Experience;
use App\Formation;
use App\Competence;
use Auth;
use App\Candidat;

class CvController extends Controller
{
    //lister les cvs
    public function index(){
     $listoffres = Auth::guard('candidat')->user()->cvs;
            $listcvs = Cv::all();
           return view('Cv.index' , ['cvs' => $liscvs]);
    }

     //Affiche le formulaire de creation de cv
    public function create($candidat_id){
    	 
    	 return view('Cv.create',['candidat_id' => $candidat_id]);
    }

     //Enrengistrer un cv
    public function store(Request $request){
    	   $cvs = new Cv();                 
           $cvs->titre = $request->input('titre');
           $cvs->divers = $request->input('divers');
           $id = Auth::guard('candidat')->user()->id;
           $user = Candidat::find($id);
           $cvs->candidat_id = $id;
           $cvs->save(); 
            return redirect('cvs');
              }

     //Permet de recuperer un cv puis de le mettre dans un formulaire
    public function edit($id){
    	$cv = Cv::find(id);
        return view('Cv.modifiercv',['cv' => $cv]);

    }

     //Permet de modifier un cv
    public function update(Request $request, $id){
    	$cv = Cv::find(id);
        $cvs->titre = $request->input('titre');
        $cvs->divers = $request->input('divers');
        $cvs->save(); 
         return redirect('cvs');
    }

     //Permet de supprimer un cv 
    public function destroy(){
    	
    }

}
