<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect($provider) {
        if($provider){
            return Socialite::driver($provider)->redirect();
        }
        abort(404);
    }
    public function callback($provider){
        if($provider)
        $socialUser = Socialite::driver($provider)->user();

        $userFromDb = User::where('auth_provider_id' , $socialUser->getId())->first();

        if(!$userFromDb){
            $userFromDb = new User();
            $userFromDb->name = $socialUser->name;
            $userFromDb->email = $socialUser->email;
            $userFromDb->auth_provider_id = $socialUser->id;
            $userFromDb->auth_provider = $provider;
            $userFromDb->avatar = $socialUser->avatar;
            
            $userFromDb->save();
            auth('web')->login($userFromDb);
            session()->regenerate();
            return redirect('/');
        }
        auth('web')->login($userFromDb);
            session()->regenerate();
            return redirect('/');
    }

}
