<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Cv;
use App\Experience;
use App\Formation;
use App\Competence;
use App\Diver;
use Auth;
use App\Candidat;
use PDF;
use App;

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

    
    public function ajout_formation(Request $request)
    {
      print_r($request->input());

$formation = new Formation; 
$formation->cv_id = request('id_cv_formation');
$formation->diplome = request('diplome_formation');
$formation->lieu = request('lieu_formation');
$formation->date_debut = request('date_debut_formation');
$formation->date_fin = request('date_fin_formation');
$formation->domaine = request('domaine_formation');
$formation->save();

 return redirect()->back(); 
    }

 public function update_formation(Request $request)
    {
      $id = $request->input('id') ;
        $formation = Formation::find($id);
        $formation->diplome = $request->input('diplome');
        $formation->lieu = $request->input('lieu');
        $formation->date_debut = $request->input('date_debut');
        $formation->date_fin = $request->input('date_fin');
        $formation->domaine = $request->input('domaine');
        $formation->save();
      
 return redirect()->back(); 
    }
  
      public function ajout_experience(Request $request)
      {
        print_r($request->input());

  $experience = new Experience; 
  $experience->cvv_id= request('id_cv_experience');
  $experience->intitule = request('intitule_experience');
  $experience->lieu = request('lieu_experience');
  $experience->date_debut = request('date_debut_experience');
  $experience->date_fin = request('date_fin_experience');
  $experience->description= request('description_experience');
  $experience->save();
   return redirect()->back(); 
      }

   public function update_experience(Request $request)
      {
        $id = $request->input('id') ;
          $experience = Experience::find($id);
          $experience->intitule = $request->input('intitule');
          $experience->lieu = $request->input('lieu');
          $experience->date_debut = $request->input('date_debut');
          $experience->date_fin = $request->input('date_fin');
          $experience->description = $request->input('description');
          $experience->save();
        
   return redirect()->back(); 
      }
      public function ajout_competence(Request $request)
      {
        print_r($request->input());

        $competence = new Competence; 
        $competence->cv_iid= request('id_cv_competence');
        $competence->description= request('description_competence');
        $competence->save();
         return redirect()->back(); 
      }

   public function update_competence(Request $request)
      {
          $id = $request->input('id') ;
          $competence = Competence::find($id);
          $competence->description = $request->input('description');
          $competence->save();
        
   return redirect()->back(); 
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

    
   
     

     //Permet de supprimer un cv 
    public function destroy(Request $request, $id){
    	   $cvs = Cv::find($id);
         $cvs->delete();
          // $listcvs = Cv::all();
          return redirect('cvs');
    }

    public function search(Request $request){
      $search = $request->get('search');
      $cvs = DB::table('cvs')->where('titre','like','%'.$search.'%')->paginate(5);
      return view ('Cv.listesdescv', ['cvs' => $cvs]);
    }


   public function pdfview(Request $request)
    {
        $cvs = DB::table('cvs')->select('id');
        view()->share('cvs',$cvs);


        if($request->has('download')){
            $pdf = PDF::loadView('Cv.details');
            return $pdf->download('details.pdf');
        }


        return view('pdfview');
    }

}
