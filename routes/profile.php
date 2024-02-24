<?php

use App\Http\Controllers\Profile\AccountController;
use App\Http\Controllers\Profile\CardController;
use App\Http\Controllers\Profile\CategoryController;
use App\Http\Controllers\Profile\DashboardController;
use App\Http\Controllers\Profile\FamilyController;
use App\Http\Controllers\Profile\OrganizationController;
use App\Http\Controllers\Profile\SubscriptionController;
use Illuminate\Support\Facades\Route;

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

Route::controller(SubscriptionController::class)->name('subscription.')->group(function () {
    Route::get('/subscription', 'index')->name('index');
    Route::post('/subscription/{subscription}', 'change')->name('change');
});

Route::controller(FamilyController::class)->middleware('can_have_family')->name('family.')->group(function () {
    Route::get('/family', 'index')->name('index');
    Route::view('/family/join', 'pages.profile.families.join')->name('join.view');
    Route::post('/family/join', 'join')->name('join.submit');
    Route::post('/family', 'create')->name('create');
    Route::post('/family/kick/{member}', 'kick')->name('kick');
});

Route::get('/organization', [OrganizationController::class, 'index'])->middleware('can_have_organization')->name('organization');
