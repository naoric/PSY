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
    return view('home');
});


Route::get('/report', function () {
    return view('forms.psyc-report');
});


Route::get('match/new', function () {
    return view('forms.match');
});

Route::get('psychologist/new', function () {
    return view('forms.psychologist');
});

Route::get('psychologist/calc', function () {
    return view('forms.calc');
});

//Route::resource('institutes', 'InstituteController');
//Route::resource('psychologists', 'PsychologistController');
//Route::resource('meetings', 'MeetingController');
