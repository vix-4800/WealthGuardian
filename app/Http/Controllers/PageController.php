<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionPlan;

class PageController extends Controller
{
    public function main()
    {
        return view('pages.main', [
            'plans' => SubscriptionPlan::with('features')->get()
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function plans()
    {
        return view('pages.plans', [
            'plans' => SubscriptionPlan::with('features')->get()
        ]);
    }

    public function features()
    {
        return view('pages.features');
    }
}
