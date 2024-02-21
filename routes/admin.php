<?php

use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->controller(App\Http\Controllers\AdminController::class)->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});
