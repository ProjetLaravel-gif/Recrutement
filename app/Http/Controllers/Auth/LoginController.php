<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config ;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:recruteur')->except('logout');
        $this->middleware('guest:candidat')->except('logout');
    }



    public function showRecruteurLoginForm()
    {
        return view('loginrecruteur', ['url' => 'loginrecruteur']);
    }



    public function showCandidatLoginForm()
    {
        return view('logincandidat', ['url' => 'logincandidat']);
    }





 protected function validator(Request $request)
    {
        return $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
    }
    /**
     * @param Request $request
     * @param $guard
     * @return bool
     */
    protected function guardLogin(Request $request, $guard)
    {
        $this->validator($request);
        return Auth::guard($guard)->attempt(
            [
                'email'=>$request->email,
                'password'=>$request->password
            ],
            
            $request->get('remember')
        );
    }





    public function recruteurLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('recruteur')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('recruteurdashboard');
        }
        return back()->withInput($request->only('email', 'remember'));
    }




    public function candidatLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('candidat')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('candidatdashboard');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
