<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

class OrganizationController extends Controller
{
    public function index()
    {
        return view('pages.profile.organizations.index');
    }
}
