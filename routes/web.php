<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\Profile\AccountController;
use App\Http\Controllers\Profile\CardController;
use App\Http\Controllers\Profile\DashboardController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {
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
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::name('accounts.')->prefix('accounts')->controller(AccountController::class)->group(function () {
        Route::get('/', 'accounts')->name('show');

        Route::get('/add', 'add')->name('add');
        Route::post('/add', 'store')->name('store');

        Route::get('/{account}', 'select')->name('select');

        Route::get('/{account}/delete', 'delete')->name('delete');
    });

    Route::name('cards.')->prefix('cards')->controller(CardController::class)->group(function () {
        Route::get('/', 'cards')->name('show');

        Route::get('/add', 'add')->name('add');
    });
});
