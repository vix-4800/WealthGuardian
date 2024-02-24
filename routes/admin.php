<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/users', [UsersController::class, 'index'])->name('users');
