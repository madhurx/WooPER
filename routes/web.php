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


//======= LANDING PAGES START

Route::get('/', function () {
    return view('landing_pages.get_started');
})->name('get_started');

Route::get('/plans', function () {
    return view('landing_pages.pricing_plans');
})->name('pricing_plans');

Route::get('/login', function () {
    return view('landing_pages.login');
})->name('login');

Route::get('/register', function () {
    return view('landing_pages.register');
})->name('register');

//======= LANDING PAGES END

//======= SUBSCRIBED PAGES START

Route::get('/videos', function () {
    return view('subscribed_pages.videos');
})->name('videos');

Route::get('/podcast', function () {
    return view('subscribed_pages.podcasts');
})->name('podcasts');

Route::get('/notes', function () {
    return view('subscribed_pages.notes');
})->name('notes');

Route::get('/blogs', function () {
    return view('subscribed_pages.blogs');
})->name('blogs');

//======= SUBSCRIBED PAGES END