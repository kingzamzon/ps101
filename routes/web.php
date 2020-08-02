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
        // correct format 2020-07-20 2020-07-02
        // $format_date = explode('-', '08-02-2020 06:000 AM');
        // $year_format = explode(' ', $format_date[2])[0];
        // return $year_format;
        // $month_format = $format_date[0];
        // $day_format = $format_date[1];
        // return "{$year_format}-{$month_format}-{$day_format}";
});
Route::group(
        ['middleware' => ['auth']],
        function () {
    
        Route::resource('agents', 'AgentController');
        Route::resource('prospects', 'CompanyController');
        Route::resource('contacts', 'ContactController');
        Route::resource('calendar', 'CalendarController');
        Route::resource('events', 'EventController');
        Route::resource('events-catgeories', 'EventCategoryController');
        Route::resource('documents', 'DocumentController');
        Route::resource('paychecks', 'PaycheckController');
        Route::resource('notes', 'NoteController');
        Route::get('agents{agent}/dashboard', 'AgentController@dashboard')->name('agents.dashboard');
        }
);

Route::get('/calendar_data', 'CalendarController@calendar_data')->name('calendar_data');

Route::get('/getLastAgentNumber', 'AgentController@getLastAgentNumber')->name('getLastAgentNumber');

// Route /agents/name/calendar show agent calendar 