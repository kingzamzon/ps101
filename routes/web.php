<?php

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
    return view('dashboard.template');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tt/{email}', function ($email) {
    // $random_letters = strtolower(str_random(7));
    // $extracted_email_address = explode('@', $email)[0];
    // $username = $extracted_email_address.$random_letters;
    // return $username;
});
