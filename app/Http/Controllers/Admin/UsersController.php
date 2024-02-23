<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
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
