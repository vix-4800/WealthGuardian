<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'main')->name('main');
Route::view('/about', 'pages.main_website.about')->name('about');
Route::view('/contact', 'pages.main_website.contact')->name('contact');
Route::get('/plans', 'plans')->name('plans');
Route::view('/features', 'pages.main_website.features')->name('features');
Route::view('/terms', 'pages.main_website.terms')->name('terms');
Route::view('/license', 'pages.main_website.license')->name('license');
Route::view('/policy', 'pages.main_website.policy')->name('policy');
