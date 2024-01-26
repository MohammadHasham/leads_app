<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class LoginController extends Controller
{
    public function googlepage()
    {
        return socialite::driver('google')->redirect();
    }

    public function googlecallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('email', $user->id)->first();

            if ($finduser)
            {
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }

            else
            {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'gogle_id'=> $user->id,
                    'password' =>encrypt('123456dummy')
                ]);

            Auth::login($newUser);
            return redirect()->intended ('dashboard');
            }

        } 
        
        catch (Exception $e)
        {
            dd($e->getMessage());
        }
    }
}
