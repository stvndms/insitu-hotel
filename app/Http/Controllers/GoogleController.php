<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){

            $user = Socialite::driver('google')->stateless()->user();

            $finduser = User::where('google_id', $user->getId)->first();

            if($finduser){

                Auth::login($finduser);

                return redirect('dashboard');

            }else{
                $newUser = User::Create([
                    'email' => $user->getEmail,
                    'name' => $user->getName,
                    // 'google_id'=> $user->getId,
                    'password' => Hash::make('password'),
                    'role' => 'guest',
                ]);

                Auth::login($newUser);

                return redirect('dashboard');
            }

        } 

}
