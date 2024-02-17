<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        $accounts = $user->accounts;

        return view('dashboard', compact('accounts'));
    }
}
