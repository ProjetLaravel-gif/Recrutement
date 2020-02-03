<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use App\Offre;
use App\Favori;
use App\Candidat;
use Auth;

 class FavorisController extends Controller
{
    public function indexf($id,Request $request){
         $favoris = new Favori();
         $id = Auth::guard('candidat')->user()->id;
         $favoris->candidat_id = $id; 
         $favoris->offre_id = $request->input('offre_id');
         $favoris->save();
           $user = Candidat::find($id);
          $favoris = $user->favoris;
      return view('favoris.indexf',['favoris' => $favoris]);
    }  

        public function index(){
               $id = Auth::guard('candidat')->user()->id;
                $user = Candidat::find($id);
                $favoris = $user->favoris;
          return view('favoris.indexf', ['favoris' => $favoris]);
        } 

        public function createf($offre_id){
        	return view('favoris.createf', ['offre_id' => $offre_id]);
        }
        public function storef(Request $request){
          $favoris = new Favori();
          $id = Auth::guard('candidat')->user()->id;
          $user = Candidat::find($id);
          $favoris->candidat_id = $id;
          $favoris->offre_id = $request->input('offre_id');
          $favoris->save();
          return redirect('offres/createo');
          }

         public function editf(Request $request){
          
         }

          public function updatef(){
             
          }
          
           public function destroyf(Request $request, $id){
           	$favoris = Favori::find($id);
            $favoris->delete();
             return redirect('favoris');
           }
}
