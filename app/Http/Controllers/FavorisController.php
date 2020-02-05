<?php

namespace App\Http\Controllers;

use App\Recruteur;
use App\Candidat;
use App\Offre;
use App\Parametre;
use Illuminate\Http\UploadedFile;
use Auth;
use App\Contact;
use App\Postules;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Favori;

 class FavorisController extends Controller
{
    public function indexf($offre_id){
         $favoris = new Favori();
         $id = Auth::guard('candidat')->user()->id;
         $favoris->candidat_id = $id; 
         $favoris->offre_id = $offre_id;
           // $favoris->offre_id = $offre_id;

         $favoris->save();

     $user = Auth::guard('candidat')->user();
        $favoris = DB::table('candidats')
        ->join('favoris','favoris.candidat_id','=','candidats.id')
        ->join('offres','offres.id','=','favoris.offre_id')
        ->select('candidats.*','favoris.*','offres.*','offres.intitule as offres')
        ->where('candidats.id','=',$user->id)
        ->get();
      return view('favoris.indexf',['favoris' => $favoris]);
    }  

        // public function index(){
        //        $id = Auth::guard('candidat')->user()->id;
        //         $user = Candidat::find($id);
        //         $favoris = $user->favoris;
        //   return view('favoris.indexf', ['favoris' => $favoris]);
        // } 

        // public function createf($offre_id){
        // 	return view('favoris.createf', ['offre_id' => $offre_id]);
        // }
        // public function storef(Request $request){
        //   $favoris = new Favori();
        //   $id = Auth::guard('candidat')->user()->id;
        //   $user = Candidat::find($id);
        //   $favoris->candidat_id = $id;
        //   $favoris->offre_id = $request->input('offre_id');
        //   $favoris->save();
        //   return redirect('offres/createo');
        //   }

        //  public function editf(Request $request){
          
        //  }

        //   public function updatef(){
             
        //   }
          
           public function destroyf(Request $request, $id){
           	$favoris = Favori::find($id);
            $favoris->delete();
            $listfavoris = Favori::all();
             return redirect('favoris');
           }
}
