<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        return view('pages.profile.admin.users', [
            'users' => User::get([
                'id',
                'name',
                'email',
            ]),
        ]);
    }
}
