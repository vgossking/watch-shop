<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
        $this->putPreviousUrlSession();
    }

    protected function credentials(Request $request){
        return array_merge($request->only($this->username(), 'password'), ['is_active' => 1]);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors([
                'password' => 'Wrong username or password or account is locked',
            ]);
    }

    public function putPreviousUrlSession(){
        if(!session()->has('from')){
            session()->put('from', url()->previous());
        }
    }


    public function authenticated(Request $request,$user)
    {
        if($user->isAdmin()){
            return redirect($this->redirectTo);
        }
        return redirect(session()->pull('from',$this->redirectTo));
    }
}
