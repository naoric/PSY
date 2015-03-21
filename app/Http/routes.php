<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('forms.login');
});


Route::get('psyc-report', function () {
    return view('forms.psyc-report');
});


Route::get('match', function () {
    return view('forms.match');
});

Route::get('psychologist/new', function () {
    return view('forms.psychologist');
});

Route::get('calc', function () {
    return view('forms.calc');
});

Route::get('delete-match', function () {
    return view('forms.delete_match');
});

Route::get('institute_page', function () {
    return view('forms.institute_page');
});


Route::get('new-match', function () {
    return view('forms.new_match');
});


//Route::resource('institutes', 'InstituteController');
//Route::resource('psychologists', 'PsychologistController');
//Route::resource('meetings', 'MeetingController');
