<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Recruteur;

class RecruteurProfileController extends Controller
{
    	 public function profile1(){
            
            $id = Auth::guard('recruteur')->user()->id;
            $user = Recruteur::find($id);
        	return view('profil1', ['recruteur' =>  $user]);
        }
       

       public function update_avatar1(Request $request){
            // Logic for user upload of logo
            if($request->hasFile('logo')){
                $logo = $request->file('logo');
                $filename = time() . '.' . $logo->getClientOriginalExtension();
                Image::make($logo)->resize(300, 300)->save( public_path('/images/logo/' . $filename ) );
                $id = Auth::guard('recruteur')->user()->id;
                $recruteur = Recruteur::find($id);
                $recruteur->logo = $filename;
                $recruteur->save();
            }
            return view('recruteurdashboard');
        
}
}