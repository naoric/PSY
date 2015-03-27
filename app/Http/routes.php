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

use App\Models\Psychologist;

Route::get('/', function () {
    return view('forms.login');
});


Route::get('map', function () {
    return view('general.map');
});

Route::get('psy_page', function () {
    return view('forms.psy_page');
});

Route::get('psy_new', function () {
    return view('forms.psy_new');
});

Route::get('institute_page', function () {
    return view('forms.institute_page');
});



Route::get('psyc-report', function () {
    return view('forms.psyc-report');
});


Route::get('match', function () {
    return view('forms.match');
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


Route::get('institute_new', function () {
    return view('forms.institute_new');
});



Route::get('new_match', function () {
    return view('forms.new_match');
});

Route::get('db', function () {
    if (DB::connection()->getDatabaseName()) {
//        dd(Psychologist::find(4));
        $psychologists = Psychologist::all();
        return view('form.whatever', ['psychologist' => $psychologist]);
    }
});


Route::get('new_psy', function () {
    return view('forms.new_psy');
});

Route::get('new_page', function () {
    return view('forms.new_page');
});

Route::get('visit_report', function () {
    return view('forms.visit_report');
});


//Route::resource('institutes', 'InstituteController');
//Route::resource('psychologists', 'PsychologistController');
//Route::resource('meetings', 'MeetingController');
