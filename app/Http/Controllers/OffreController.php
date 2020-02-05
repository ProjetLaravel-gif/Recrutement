<?php

namespace App\Http\Controllers;

use App\Recruteur;
use App\Candidat;
use App\Offre;
use App\Parametre;
use Illuminate\Http\UploadedFile;
use Auth;
use App\Message;
use App\Contact;
use App\Postules;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class OffreController extends Controller
{
    public function mesjobs(Request $request){
      // $id = Auth::guard('recruteur')->user()->id;
      // $user = Recruteur::find($id);
      // $offres = $user->offres()->paginate(5);
      $offres = Offre::where('statut','0')->get();
      return view('offres.mesjobs' , ['offres' => $offres]);
    }


    public function jobs(Request $request){
      //$offres = Offre::find($id);
      $offres = Offre::where('statut','1')->get();
      return view('offres.jobs' , ['offres' => $offres]);
    }



     public function statut($id){
        $offres = Offre::find($id);
        if ($offres->statut == 0) {
          $offres->statut = 1;
        }
        else {
          $offres->statut = 0;
        }
        $offres->save();
        return redirect('jobs');
      }

     


     public function indexo1(){ 
     
      //$offres = new Offre();
      //$id = Auth::guard('recruteur')->user()->id;
      // $offres->recruteur_id = $id;
      // $offres->save();
      // $listoffres = Offre::find($id);
      $listoffres = Offre::where('statut','1')->get();
      //$listoffres = Offre::all();
      return view('offres.indexo1' , ['offres' => $listoffres]);
    }
     
     public function list(){

      $listjobs = Recruteur::all();
      return view('offres.list',['jobs' => $listjobs]); 
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
      $offres->date = $request->input('date');
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
      $listoffres = Offre::where('statut','1')->get();
      return view('offres.indexo1' , ['offres' => $listoffres]);
    }

       public function storeC1(Request $request){
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
      $list = Recruteur::all();
      return view('offres.list' , ['jobs' => $list]);
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
      return redirect('offre');
     }


     public function voir(){
      $user = Auth::guard('recruteur')->user();
        $postules = DB::table('candidats')
        ->join('postules','postules.candidat_id','=','candidats.id')
        ->join('offres','offres.id','=','postules.offres_id')
        ->join('recruteurs','recruteurs.id','=','offres.recruteur_id')
        ->select('candidats.*','postules.*','offres.intitule as offres')
        ->where('recruteurs.id','=',$user->id)
        ->get();
          

        return view('offres.offrecandidat', ['postules'=>$postules]);
     }


      public function stp ($nom){

        return Storage::download('cv/'.$nom);
        
        
      }


      public function index()
    {
      
      $user = Auth::guard('recruteur')->user();
         $stat = DB::table('offres')
        ->join('recruteurs','recruteurs.id','=','offres.recruteur_id')
        ->where('offres.recruteur_id','=',$user->id)->get();
  
        return view('simple',  ['stats' => $stat] );
    }
  


     public function index1()
     {

        $user = Auth::guard('recruteur')->user();
         $stat = DB::table('offres')
        ->join('recruteurs','recruteurs.id','=','offres.recruteur_id')
        ->where('offres.recruteur_id','=',$user->id and 'offres.type','=', 'stage' )->count();
                   
        $stat1 = DB::table('offres')
        ->join('recruteurs','recruteurs.id','=','offres.recruteur_id')
        ->where('offres.recruteur_id','=',$user->id and 'offres.type','=', 'CDD' )->count();

        $stat2 = DB::table('offres')
        ->join('recruteurs','recruteurs.id','=','offres.recruteur_id')
        ->where('offres.recruteur_id','=',$user->id and 'offres.type','=', 'CDI' )->count();
        return view('camembert');
     }


     public function index2(){
       
       $stat = DB::table('offres')->select('offres.ville as wilaya' ,DB::raw('count(offres.ville) as total'))->groupBy('wilaya')->get();
        return view('camembert',['stats' => $stat]);
     }


      public function postuler1(Request $request){
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
      
      $postuler->recruteur_id = $request->input('recruteur_id');
      $postuler->save();
      return redirect('offre');
     }

      public function voir2(){
      $user = Auth::guard('recruteur')->user();
        $postules = DB::table('candidats')
        ->join('postuler','postuler.candidat_id','=','candidats.id')
        ->join('recruteurs','recruteurs.id','=','postuler.recruteur_id')
        ->select('candidats.*','postuler.*','recruteurs.intitule as recruteur')
        ->where('recruteurs.id','=',$user->id)
        ->get();
         return view('offres.offrecandidat', ['postules'=>$postules]);
}



    public function offrepostulée(){
        

     $user = Auth::guard('candidat')->user();
        $offres = DB::table('candidats')
        ->join('postules','postules.candidat_id','=','candidats.id')
        ->join('offres','offres.id','=','postules.offres_id')
        ->join('recruteurs','recruteurs.id','=','offres.recruteur_id')
        ->select('candidats.*','postules.*','recruteurs.*','offres.*')
        ->where('recruteurs.id','=',$user->id)
        ->get();
      return view('offres.offre',['offres' => $offres]);
    }  


    public function createCc($id){
   return view('contact1', ['candidat_id' => $id]);}


    public function storeCc(Request $request){
      $contacts = new Message();
      $contacts->nom = $request->input('nom');
      $contacts->numero = $request->input('numero');
      $contacts->email = $request->input('email');
      $contacts->objet = $request->input('objet');
      $contacts->message = $request->input('message');
      $contacts->candidat_id = $request->input('candidat_id');
      $id = Auth::guard('recruteur')->user()->id;
      $user = Recruteur::find($id);
      $contacts->recruteur_id = $id;
      $contacts->save();
      $offres = Postules::all();
      return view('contact1',['offres' => $offres]);
    }

    public function message1(Request $request){

      $id = Auth::guard('candidat')->user()->id;
      $user = Candidat::find($id);
      $contacts = $user->messages;
      return view('message1' , ['contacts' => $contacts]);

    }

}

 
 