<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\Response;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $authUser = User::whereGoogleId($googleUser->getId())->first();

            if (!$authUser) {
                $authUser = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                ]);
            }

            auth()->login($authUser);

            return redirect()->route('dashboard');
        } catch (\Throwable) {
            return redirect()->back()->withErrors('Google Authentication Error');
        }
    }
}
