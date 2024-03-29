<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Socialite;

class AuthController extends Controller
{
    /**
    * Redirect the user to the OAuth Provider.
    *
    * @return Response
    */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    
    /**
    * Obtain the user information from provider.  Check if the user already exists in our
    * database by looking up their provider_id in the database.
    * If the user exists, log them in. Otherwise, create a new user then log them in. After that 
    * redirect them to the authenticated users homepage.
    *
    * @return Response
    */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();
        
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect('/dados-pessoais');
    }
    
    /**
    * If a user has registered before using social auth, return the user
    * else, create a new user object.
    * @param  $user Socialite user object
    * @return  User
    */
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('email', $user->email)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'name'     => $user->name,
            'email'    => $user->email, 
            'password' => Hash::make('25468932swef'),
            'provider' => $provider
            ]);
        }
    }
