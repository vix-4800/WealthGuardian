<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Family;
use Illuminate\Support\Str;

class FamilyController extends Controller
{
    public function index()
    {
        return view('pages.profile.families.index');
    }

    public function create()
    {
        Family::create([
            'creator' => auth()->id(),
            'invitation_code' => Str::random(10),
        ]);

        return back();
    }
}
