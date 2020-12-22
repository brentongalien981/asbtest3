<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class TestLoginController extends Controller
{
    public function redirectToFacebookProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function handleFacebookProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        return [
            'user' => $user,
        ];
    }

    public function puta() {
        return [
            'msg' => 'are you fucking kiddin me'
        ];
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        return [
            'user' => $user,
            '$user->token' => $user->token
        ];
    }
}
