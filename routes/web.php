<?php

use Illuminate\Support\Facades\Route;

Route::controller(App\Http\Controllers\PageController::class)->group(function () {
    Route::get('/', 'main')->name('main');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/plans', 'plans')->name('plans');
    Route::get('/features', 'features')->name('features');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->controller(App\Http\Controllers\ProfileController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');

    Route::name('accounts.')->prefix('accounts')->group(function () {
        Route::get('/{accountId}', 'select')->name('select');
    });
});
