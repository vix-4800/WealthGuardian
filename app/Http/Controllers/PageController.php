<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionPlan;

class PageController extends Controller
{
    public function main()
    {
        $plans = SubscriptionPlan::with('features')->get();

        return view('pages.main', compact('plans'));
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
        return view('pages.plans');
    }

    public function features()
    {
        return view('pages.features');
    }
}
