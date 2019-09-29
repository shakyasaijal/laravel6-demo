<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;

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
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')
        ->redirect();
    }

    public function handleProviderCallback()
    {
        $facebook = Socialite::driver('facebook')->user();

        
        $user = User::where('provider_id', $facebook->id)->first();
        if (!$user) {
            $user = User::create([
                'name'     => $facebook->name,
                'email'    => $facebook->email,
                'provider' => 'facebook',
                'provider_id' => $facebook->id
            ]);
        }
        auth()->login($user); 
        return $user;    
    }

    public function redirectToGithub()
    {
        return Socialite::driver('github')
        ->redirect();
    }

    public function handleGithubCallback()
    {
        $github = Socialite::driver('github')->user();

        
        $user = User::where('provider_id', $github->id)->first();
        if (!$user) {
            $user = User::create([
                'name'     => $github->name,
                'email'    => $github->email,
                'provider' => 'github',
                'provider_id' => $github->id
            ]);
        }
        auth()->login($user); 
        return $user;    
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')
        ->redirect();
    }

    public function handleGoogleCallback()
    {
        $google = Socialite::driver('google')->user();

        
        $user = User::where('provider_id', $google->id)->first();
        if (!$user) {
            $user = User::create([
                'name'     => $google->name,
                'email'    => $google->email,
                'provider' => 'google',
                'provider_id' => $google->id
            ]);
        }
        auth()->login($user); 
        return $user;    
    }

}
