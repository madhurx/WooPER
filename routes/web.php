<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Landing_Page\Basic;
use App\Http\Controllers\Landing_Page\Learner_Auth_Controller;
// use App\Http\Controllers\Home_pages\Basic;
// use App\Http\Controllers\Subscribed_pages\Basic;


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

    Route::get('/reset', 'Landing_Page\Basic@get_reset')->name('get_reset');

    Route::post('/reset/otp', 'Landing_Page\Learner_Auth_Controller@reset_otp')->name('get_reset_otp');

    Route::post('/reset', 'Landing_Page\Learner_Auth_Controller@reset_pass')->name('reset_pass');

    // Route::get('/reset', 'Landing_Page\Learner_Auth_Controller@send_mail')->name('reset_pass');

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

    //======= ADMIN PAGES START

    Route::get('/admin', 'Admin\Basic@dashboard')->name('admin_dashboard');

    Route::get('/admin/notes', 'Admin\Basic@notes_view_all')->name('notes_view_all');

    Route::get('/admin/customers', 'Admin\Basic@customers_view_all')->name('customers_view_all');

    Route::get('/admin/add-plan', 'Admin\Basic@create_plans')->name('create_plans');

    Route::post('/admin/add-plan', 'Admin\Basic@create_plans')->name('create_plans');

    Route::get('/admin/plans', 'Admin\Basic@view_plans')->name('view_plans');

    // Route::get('/admin', 'Admin\Basic@dashboard')->name('admin_dashboard');
    // Route::get('/admin', 'Admin\Basic@dashboard')->name('admin_dashboard');

    //======= ADMIN PAGES END
});
