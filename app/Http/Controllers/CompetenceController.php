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
       	return redirect('cvs' );

       }
       public function update(Request $request, $id){
           $competence = Competence::find($id);
           $competence->description = $request->input('description');
           $competence->cv_iid = $request->input('cv_iid');
           $competence->save();
            return redirect('cvs');
       }


        public function destroy(Request $request, $id){
         $competence = Competence::find($id);
         $competence->delete();
          // $listcvs = Cv::all();
          return redirect('cvs');
    }

       public function getCompetence($id){

         $cv = Cv::find($id);
         return $cv->competences;
      
       }
        public function addCompetence(Request $request){
         $competence = new Competence();                 
         $competence->description = $request->description;
         $competence->cv_iid = $request->cv_iid;
         $competence->save();
          return Response()->json(['etat' => true, 'id' => $competence->id]);
       }
      
}

