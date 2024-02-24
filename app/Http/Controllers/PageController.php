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

    public function about()
    {
        return view('pages.main_website.about');
    }

    public function contact()
    {
        return view('pages.main_website.contact');
    }

    public function plans()
    {
        return view('pages.main_website.plans', [
            'plans' => SubscriptionPlan::with('features')->get(),
        ]);
    }

    public function features()
    {
        return view('pages.main_website.features');
    }

    public function terms()
    {
        return view('pages.main_website.terms');
    }

    public function license()
    {
        return view('pages.main_website.license');
    }
}
