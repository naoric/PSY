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


Route::resource('psychologist', 'PsychologistController', ['except' => ['patch']]);
Route::resource('educational-institute', 'EducationalInstituteController', ['except' => ['patch']]);
Route::resource('shapah', 'ShapahController', ['only' => ['show', 'edit', 'update']]);
Route::resource('psychologist-visit', 'PsychologistVisitController', ['except' => ['patch']]);
Route::resource('match', 'MatchController', ['except' => ['show', 'patch']]);

 Route::get('/', function () {
     return view('forms.login');
 });


 Route::get('map', function () {
     return view('general.map');
 });

 Route::get('psy_page', function () {
    return view('forms.psy_page');
 });
//shapahs

     Route::get('shapah_elksom', function () {
    return view('shapahs.shapah_elksom');
 });
     Route::get('shapah_ofakim', function () {
    return view('shapahs.shapah_ofakim');
 });

     Route::get('shapah_ashdod', function () {
    return view('shapahs.shapah_ashdod');
 });

     Route::get('shapah_eshkol', function () {
    return view('shapahs.shapah_eshkol');
 });

    Route::get('shapah_ashkelon', function () {
    return view('shapahs.shapah_ashkelon');
 });

    Route::get('shapah_tuvia', function () {
    return view('shapahs.shapah_tuvia');
 });



     Route::get('shapah_ashdod', function () {
    return view('shapahs.shapah_ashdod');
 });


 Route::get('shapah_eilat', function () {
    return view('shapahs.shapah_eilat');
 });

 Route::get('shapah_sheva', function () {
    return view('shapahs.shapah_sheva');
 });

 Route::get('shapah_shimon', function () {
    return view('shapahs.shapah_shimon');
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
     return Psychologist::all();
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


