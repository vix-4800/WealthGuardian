<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('pages.profile.subscriptions.index', [
            'subscription' => auth()->user()->subscriptionPlan,
        ]);
    }
}
