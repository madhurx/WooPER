<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing_pages.get_started');
})->name('get_started');

Route::get('/plans', function () {
    return view('landing_pages.pricing_plans');
})->name('pricing_plans');

Route::get('/videos', function () {
    return view('subscribed_pages.videos');
})->name('videos');

Route::get('/login', function () {
    return view('landing_pages.login');
})->name('login');

Route::get('/register', function () {
    return view('landing_pages.register');
})->name('register');