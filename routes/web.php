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
    return view('drop-shop');
})-> name("drop-shop");

// Routes in this group are only accesible to admin users
Route::group(['middleware' => 'admin'], function () {
  Route::get('scraper-input', 'ScraperInputController@show');
  Route::post('scraper-input', 'ScraperInputController@add_scraper_entry');
  Route::get('send-mail', 'MailController@send');
});

Route::get('products', 'ProductController@show_random_products')-> name("products");
Route::get('products/{collab_name?}', 'ProductController@show_collab_products')-> name("products");

Route::get('calendar', function () {
    return view('calendar');
})-> name("calendar");

Route::get('socials', function () {
    return view('socials');
})-> name("socials");

Route::get('login', function () {
    return view('login');
})-> name("login");

Route::get('login', 'UserController@create')->name("login");
Route::post('login', 'UserController@store');

Auth::routes();

Route::get('/account', 'HomeController@index')->name('account');

Route::post('/update-account-settings', 'HomeController@UpdateAccountSettings')->name('UpdateAccountSettings');