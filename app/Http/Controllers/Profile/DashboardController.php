<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Services\DashboardService;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('pages.profile.dashboard', [
            'accounts' => (new DashboardService)->getAccounts(),
        ]);
    }
}
