<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing_Page\Basic;
use App\Http\Controllers\Landing_Page\Learner_Auth_Controller;

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


Route::group(['middleware' => "web"], function () {
    //======= LANDING PAGES START

    Route::get('/', 'Landing_Page\Basic@get_started')->name('get_started');

    Route::get('/plans', 'Landing_Page\Basic@plans')->name('pricing_plans');

    Route::get('/login', 'Landing_Page\Basic@view_login_page')->name('get_login');

    Route::get('/register/{selected_plan_id?}', 'Landing_Page\Basic@view_register_page')->name('get_register');

    Route::post('/register', 'Landing_Page\Learner_Auth_Controller@register')->name('post_register');

    Route::post('/login', 'Landing_Page\Learner_Auth_Controller@login')->name('post_login');

    //======= LANDING PAGES END

    //======= HOME PAGES START

    Route::get('/home', 'Home_Pages\Basic@index')->name('homepage_index');

    //======= HOME PAGES END

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
});
