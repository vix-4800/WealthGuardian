<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\SubscriptionPlan;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('pages.profile.subscriptions.index', [
            'currentSubscription' => auth()->user()->subscriptionPlan,
            'subscriptions' => SubscriptionPlan::all(),
        ]);
    }

    public function change(SubscriptionPlan $subscription)
    {
        auth()->user()->changeSubscriptionPlan($subscription);

        return redirect()->back();
    }
}
