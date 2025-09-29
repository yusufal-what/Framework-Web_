<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GoogleController extends Controller
{
    // 1. Redirect ke Google
    public function google_redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    // 2. Callback dari Google
    public function google_callback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'name'      => $googleUser->getName(),
                'google_id' => $googleUser->getId(),
                'avatar'    => $googleUser->getAvatar(),
                'password'  => bcrypt(str()->random(16)),
            ]
        );

        // login usernya + remember
        Auth::login($user, true);

        // redirect ke dashboard
        return redirect()->route('dashboard');
    }
}
