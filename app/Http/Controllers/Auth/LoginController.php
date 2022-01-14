<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use app\user;
use Illuminate\Support\Facades\Auth;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


//    public function login(Request $request){
//    dd($request->all());
//
//        if (Auth::attempt([
//        'email'=> $request->email,
//        'password'=> $request->password
//    ]))
//    {
//       $user=User::where('email', $request->email)->first();
//
//        if($user->is_admin()){
//        return redirect()->route('admindashboard');
//        }
//        return redirect()->route('home');
//
//    }
//
//}

//    public function authenticated(Request $request,$user){
//        if($user->has_role('0')){
//            return redirect()->route('admin');
//        }
//        if($user->has_role('1')){
//            return redirect()->route('home');
//        }
//
//    }
}
