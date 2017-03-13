<?php

namespace App\Http\Controllers\Auth;

use App\Atleta;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function login()
    {
        $input = Input::all();
        $atleta = Atleta::where('login', $input['login'])->first();
        if(!is_null($atleta))
            if($atleta->senha == $input['senha']){
                Auth::guard('web')->login($atleta);
                return redirect(url('/atletas'));
            }
            else
                return back();
         else
             return back();
    }

    public function logout(){
        auth()->logout();

        return redirect('/atletas/login');
    }

}
