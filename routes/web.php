<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\Profile\AccountController;
use App\Http\Controllers\Profile\CardController;
use App\Http\Controllers\Profile\CategoryController;
use App\Http\Controllers\Profile\DashboardController;
use App\Http\Controllers\Profile\FamilyController;
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

        Route::view('/add', 'pages.profile.accounts.add')->name('add');
        Route::post('/add', 'store')->name('store');

        Route::get('/{account}', 'select')->name('select');

        Route::get('/{account}/delete', 'delete')->name('delete');

        Route::get('/{account}/new-record/{type}', 'newRecord')->name('add.record');
    });

    Route::name('cards.')->prefix('cards')->controller(CardController::class)->group(function () {
        Route::get('/', 'cards')->name('show');

        Route::get('/add', 'add')->name('add');
    });

    Route::name('categories.')->prefix('categories')->controller(CategoryController::class)->group(function () {
        Route::post('/{account}/new-record/{type}', 'add')->name('add');
    });
    Route::get('/family', [FamilyController::class, 'index'])->name('family');
});
