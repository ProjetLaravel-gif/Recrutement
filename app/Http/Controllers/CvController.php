<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use App\Experience;
use App\Formation;
use App\Competence;
use App\Diver;
use Auth;
use App\Candidat;

class CvController extends Controller
{
    //lister les cvs
    public function index(Request $request){
       $id = Auth::guard('candidat')->user()->id;
       $user = Candidat::find($id);
       $cvs = $user->cvs;
     return view('Cv.listesdescv' , ['cvs' => $cvs]);
    }
     //Affiche le formulaire de creation de cv
    public function create($candidat_id){
    	 
    	 return view('Cv.create',['candidat_id' => $candidat_id]);

    }

     public function details($id){
       $cvs = Cv::find($id);
        return view('Cv.details', ['cvs' => $cvs]);
    }

     //Enrengistrer un cv
    public function store(Request $request){
    	     $cvs = new Cv();                 
           $cvs->titre = $request->input('titre');
           $id = Auth::guard('candidat')->user()->id;
           $user = Candidat::find($id);
           $cvs->candidat_id = $id;
           $cvs->save(); 
           $divers = $request->divers_ids;
           foreach ($divers as $diver) {
           $div= Diver::find($diver);
           $cvs->divers()->attach($div);
              }
              return redirect('formations/create/'.$cvs->id)->with([ 'cv_id' => $cvs->id ] );
           // return view('pipipi', [ 'test' => $request->divers_ids ] );
}
     //Permet de recuperer un cv puis de le mettre dans un formulaire
    public function edit($id){
    	$cvs = Cv::find($id);
        return view('Cv.edit',['cvs' => $cvs]);

    }

     //Permet de modifier un cv
    public function update(Request $request, $id){
    	  $cvs = Cv::find($id);
        $cvs->titre = $request->input('titre');
        $id = Auth::guard('candidat')->user()->id;
        $user = Candidat::find($id);
        $cvs->candidat_id = $id;
        $cvs->save();
         return redirect('cvs');
    }

    public function show($id){

     return view('Cv.formation',['id' => $id]);
     
    }

     //Permet de supprimer un cv 
    public function destroy(Request $request, $id){
    	   $cvs = Cv::find($id);
         $cvs->delete();
          // $listcvs = Cv::all();
          return redirect('cvs');
    }

}
