<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use App\Competence;
use App\Offre;
use Illuminate\Support\Facades\DB;
use App\Recruteur;
use Auth;
class StatController extends Controller
{
	public function index()
    {
        // $stat = Offre::select(\DB::raw("COUNT(*) as count"))
        //             ->join('recruteurs','recruteurs.id','=','offres.recruteur_id')
        //             ->whereYear('created_at', date('Y'))
        //             ->groupBy(\DB::raw("Month(created_at)"))
        //             ->pluck('count');
          
        // return view('affiche', compact('stat'));
        // $user = Auth::guard('recruteur')->user();
        //  $stat = DB::table('offres')
        // ->join('recruteurs','recruteurs.id','=','offres.recruteur_id')
        // ->select("COUNT(*) as count")
        // ->where('recruteurs.id','=',$user->id)
        // ->get();

    //     $stat = DB::select("
				// SELECT * , COUNT(*) AS count
				// FROM offres o, recruteurs r 
				// WHERE Year('created_at', date('Y') AND r.id = o.id_recruteur)
				// 	group By("Month(created_at)")
				// ");
 

  $stat = Offre::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');
        return view('affiche', compact('stat'));
    }
}


 
          
