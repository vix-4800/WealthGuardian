<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class GitHubController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callback()
    {
        try {
            $githubUser = Socialite::driver('github')->user();
            $authUser = User::whereGithubId($githubUser->getId())->first();

            if (! $authUser) {
                $authUser = User::create([
                    'name' => $githubUser->getName(),
                    'email' => $githubUser->getEmail(),
                    'github_id' => $githubUser->getId(),
                ]);
            }

            auth()->login($authUser);

            return redirect()->route('dashboard');
        } catch (\Throwable) {
            return redirect()->back()->withErrors('Github Authentication Error');
        }
    }
}
