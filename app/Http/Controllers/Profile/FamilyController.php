<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

class FamilyController extends Controller
{
    public function index()
    {
        return view('pages.profile.families.index');
    }
}
