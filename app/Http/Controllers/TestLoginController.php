<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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

        $url = "https://yongestreetproject.com/receive-access-token?token=" . $user->token;

        return Redirect::to($url);

        // return [
        //     'user' => $user,
        //     'userId' => $user->id,
        //     'token' => $user->token,
        //     'expiresIn' => $user->expiresIn,
        //     '$user->token' => $user->token
        // ];
    }



    public function getUserInfo(Request $request)
    {

        $user = Socialite::driver('google')->userFromToken($request->token);

        return [
            'objs' => [
                'user' => $user,
                'userId' => $user->id,
                'expiresIn' => $user->expiresIn
            ]
        ];

    }
}
