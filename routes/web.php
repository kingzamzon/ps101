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

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tt/{email}', function ($email) {
        // $format_date = explode('-', '2021-05-28 00:00:00');
        // $year_format = (integer) substr($format_date[0], -2);
        // $month_format = (integer) $format_date[1];
        // $day_format = (integer) substr($format_date[2], 0, 2);
        // return "{$year_format}{$month_format}{$day_format}";
});

Route::resource('agents', 'AgentController');
Route::resource('prospects', 'CompanyController');
Route::resource('contacts', 'ContactController');
Route::resource('calendar', 'CalendarController');
Route::resource('events', 'EventController');
Route::resource('documents', 'DocumentController');
Route::resource('paychecks', 'PaycheckController');
Route::resource('notes', 'NoteController');

Route::get('/calendar_data', 'CalendarController@calendar_data')->name('calendar_data');


// Route /agents/name/calendar show agent calendar 