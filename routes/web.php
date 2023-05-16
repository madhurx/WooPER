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

    Route::get('/contact', 'Home_Pages\Basic@contact')->name('contact');

    Route::get('/about', 'Home_Pages\Basic@about')->name('about');

    //======= HOME PAGES END

    //======= SUBSCRIBED PAGES START

    Route::get('/videos', 'Subscribed_pages\Basic@videos')->name('videos');

    Route::get('/podcasts', 'Subscribed_pages\Basic@podcasts')->name('podcasts');

    Route::get('/notes', 'Subscribed_pages\Basic@notes')->name('notes');

    Route::get('/blogs', 'Subscribed_pages\Basic@blogs')->name('blogs');

    //======= SUBSCRIBED PAGES END

    //======= LOGOUT BUTTON START

    Route::get('/logout', 'Subscribed_pages\Basic@logout')->name('logout');

    //======= LOGOUT BUTTON END
});
