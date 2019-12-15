<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\Recruteur;
use App\Candidat;
use App\Offre;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:recruteur');
        $this->middleware('guest:candidat');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
             'numtel' => ['required', 'string', 'max:10'],
              'adresse' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:candidats'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


     protected function validator1(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required', 'string', 'max:255'],
            'numtel' => ['required', 'string', 'max:10'],
            'adresse' => ['required', 'string', 'max:255'],
            'siteweb' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:recruteurs'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

    public function showRecruteurRegisterForm()
    {
        return view('recruteur', ['url' => 'recruteur']);
    }

    public function showCandidatRegisterForm()
    {
        return view('candidat', ['url' => 'candidat']);
    }




    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }



     protected function createRecruteur(Request $request)
    {


         $this->validator1($request->all())->validate();
         
        $recruteur = Recruteur::create([
            'nom' => $request['nom'],
            'type' => $request['type'],
            'numtel' => $request['numtel'],
            'adresse' => $request['adresse'],
            'siteweb' => $request['siteweb'], 
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
             ]);
        
       
            
            
        // $recruteur->logo->store('image');

           

         return redirect()->intended('login/recruteur');
    }


      protected function createCandidat(Request $request)
    {

        
        $this->validator($request->all())->validate();
        
         $candidat = Candidat::create([
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
            'civilite' => $request['civilite'],
            'datenaiss' => $request['datenaiss'],
            'numtel' => $request['numtel'],
            'linkedlin' => $request['linkedlin'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/candidat');
    }

    public function stores(Request $request){
      
      return redirect('offres/createo');
      
    }

}
