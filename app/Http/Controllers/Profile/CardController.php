<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

class CardController extends Controller
{
    public function cards()
    {
        return view('pages.profile.cards.showAll', [
            'cards' => auth()->user()->bankCards,
        ]);
    }

    public function add()
    {
        return view('pages.profile.cards.add');
    }
}
