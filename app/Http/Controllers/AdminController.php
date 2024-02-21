<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('pages.profile.admin.dashboard');
    }

    public function users()
    {
        return view('pages.profile.admin.users', [
            'users' => User::get([
                'id',
                'name',
                'email',
                'profile_photo_path',
            ]),
        ]);
    }
}
