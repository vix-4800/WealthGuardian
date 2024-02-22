<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Services\DashboardService;

class DashboardController extends Controller
{
    private DashboardService $service;

    public function __construct(DashboardService $service)
    {
        $this->service = $service;
    }

    public function dashboard()
    {
        return view('pages.profile.dashboard', [
            'accounts' => $this->service->getAccounts(),
        ]);
    }
}
