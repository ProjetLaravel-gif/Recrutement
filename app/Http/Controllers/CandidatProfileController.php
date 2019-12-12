<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Image;
use App\Candidat;

class CandidatProfileController extends Controller
{
	 public function profile(){
        
        $id = Auth::guard('candidat')->user()->id;
        $user = Candidat::find($id);
    	return view('profil', ['candidat' =>  $user]);
    }
   

   public function update_avatar(Request $request){
        // Logic for user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/images/avatars/' . $filename ) );
            $id = Auth::guard('candidat')->user()->id;
            $candidat = Candidat::find($id);
            $candidat->avatar = $filename;
            $candidat->save();
        }
        return view('profil', ['candidat' => $candidat] );
    }
}
