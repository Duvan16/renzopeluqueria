<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public  function redirectPath()
    {
        switch (auth()->user()->role_id) {
            case 1: //1-admin
                return '/homeAdmin';
                break;
            case 2: //2-cliente
                return '/home';
                break;
            case 3: //3-estilista
                return '/homeEstilista';
                break;
            default:
                return '';
                break;
        }
    }
}
