<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionPlan;

class PageController extends Controller
{
    public function main()
    {
        return view('pages.main_website.main', [
            'plans' => SubscriptionPlan::with('features')->get(),
        ]);
    }

    public function plans()
    {
        return view('pages.main_website.plans', [
            'plans' => SubscriptionPlan::with('features')->get(),
        ]);
    }
}
