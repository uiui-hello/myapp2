<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Where to redirect users after logout.
     *
     * 
     */
    public function logout (Request $request) {
        //logout user
        auth()->logout();
        // redirect to login
        return redirect()->route('login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // ログインユーザーの会員登録不可
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function redirectPath()
    {
        return 'tasks';
    }
}
