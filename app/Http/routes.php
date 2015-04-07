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

Route::get( '/', function () {
	return redirect( 'auth/login' );
} );


Route::group( [ 'middleware' => 'auth', 'permissions' => 'user' ], function () {
	Route::resource( 'visit', 'VisitController', [ 'except' => [ 'patch' ] ] );
	Route::resource('match', 'MatchController', ['only' => ['index']]);
	Route::resource( 'psychologist', 'PsychologistController', [ 'except' => [ 'patch', 'store' ] ] );
} );

Route::group( [ 'middleware' => 'auth', 'permissions' => 'manager' ], function () {
	Route::resource( 'shapah', 'ShapahController', [ 'only' => [ 'show', 'edit', 'update' ] ] );
	Route::resource( 'visit', 'VisitController', [ 'except' => [ 'patch' ] ] );
	Route::resource( 'match', 'MatchController', [ 'except' => [ 'show', 'patch' ] ] );
	Route::resource( 'institute', 'InstituteController', [ 'except' => [ 'patch' ] ] );
} );


Route::get( 'auth/login', function () {
	return view( 'forms.login' );
} );

Route::post( 'auth/login', [ 'as' => 'login', 'uses' => 'Auth\AuthController@postLogin' ] );
Route::post( 'auth/register', [ 'as' => 'register', 'uses' => 'Auth\AuthController@postRegister' ] );
Route::get( 'auth/logout', [ 'as' => 'logout', 'uses' => 'Auth\AuthController@getLogout' ] );

Route::get( 'map', function () {
	return view( 'general.map' );
} );

Route::get( 'psy_page', function () {
	return view( 'forms.psy_page' );
} );
//shapahs

Route::get( 'shapah_elksom', function () {
	return view( 'shapahs.shapah_elksom' );
} );
Route::get( 'shapah_ofakim', function () {
	return view( 'shapahs.shapah_ofakim' );
} );

Route::get( 'shapah_ashdod', function () {
	return view( 'shapahs.shapah_ashdod' );
} );

Route::get( 'shapah_eshkol', function () {
	return view( 'shapahs.shapah_eshkol' );
} );

Route::get( 'shapah_ashkelon', function () {
	return view( 'shapahs.shapah_ashkelon' );
} );

Route::get( 'shapah_tuvia', function () {
	return view( 'shapahs.shapah_tuvia' );
} );

Route::get( 'shapah_ashdod', function () {
	return view( 'shapahs.shapah_ashdod' );
} );

Route::get( 'shapah_eilat', function () {
	return view( 'shapahs.shapah_eilat' );
} );

Route::get( 'shapah_sheva', function () {
	return view( 'shapahs.shapah_sheva' );
} );

Route::get( 'shapah_shimon', function () {
	return view( 'shapahs.shapah_shimon' );
} );

Route::get( 'shapah_dimona', function () {
	return view( 'shapahs.shapah_dimona' );
} );

Route::get( 'psy_new', function () {
	return view( 'forms.psy_new' );
} );

Route::get( 'shapah_hevron', function () {
	return view( 'shapahs.shapah_hevron' );
} );

Route::get( 'shapah_eilot', function () {
	return view( 'shapahs.shapah_eilot' );
} );

Route::get( 'shapah_hofashkelon', function () {
	return view( 'shapahs.shapah_hofashkelon' );
} );

Route::get( 'shapah_hura', function () {
	return view( 'shapahs.shapah_hura' );
} );

Route::get( 'shapah_yoav', function () {
	return view( 'shapahs.shapah_yoav' );
} );

Route::get( 'shapah_yeruham', function () {
	return view( 'shapahs.shapah_yeruham' );
} );

Route::get( 'shapah_ksaife', function () {
	return view( 'shapahs.shapah_ksaife' );
} );

Route::get( 'shapah_lehavim', function () {
	return view( 'shapahs.shapah_lehavim' );
} );

Route::get( 'shapah_lahish', function () {
	return view( 'shapahs.shapah_lahish' );
} );

Route::get( 'shapah_meitar', function () {
	return view( 'shapahs.shapah_meitar' );
} );

Route::get( 'shapah_mizpe', function () {
	return view( 'shapahs.shapah_mizpe' );
} );

Route::get( 'shapah_merhavim', function () {
	return view( 'shapahs.shapah_merhavim' );
} );

Route::get( 'shapah_netivot', function () {
	return view( 'shapahs.shapah_netivot' );
} );

Route::get( 'shapah_nevemidbar', function () {
	return view( 'shapahs.shapah_nevemidbar' );
} );

Route::get( 'shapah_omer', function () {
	return view( 'shapahs.shapah_omer' );
} );

Route::get( 'shapah_arava', function () {
	return view( 'shapahs.shapah_arava' );
} );

Route::get( 'shapah_arad', function () {
	return view( 'shapahs.shapah_arad' );
} );

Route::get( 'shapah_arara', function () {
	return view( 'shapahs.shapah_arara' );
} );

Route::get( 'shapah_kiryatgat', function () {
	return view( 'shapahs.shapah_kiryatgat' );
} );

Route::get( 'shapah_kiryatmalahi', function () {
	return view( 'shapahs.shapah_kiryatmalahi' );
} );

Route::get( 'shapah_rahat', function () {
	return view( 'shapahs.shapah_rahat' );
} );

Route::get( 'shapah_ramatnegev', function () {
	return view( 'shapahs.shapah_ramatnegev' );
} );

Route::get( 'shapah_segev', function () {
	return view( 'shapahs.shapah_segev' );
} );

Route::get( 'shapah_sdot', function () {
	return view( 'shapahs.shapah_sdot' );
} );

Route::get( 'shapah_sderot', function () {
	return view( 'shapahs.shapah_sderot' );
} );
Route::get( 'shapah_shaar', function () {
	return view( 'shapahs.shapah_shaar' );
} );

Route::get( 'shapah_shafir', function () {
	return view( 'shapahs.shapah_shafir' );
} );


Route::get( 'shapah_telsheva', function () {
	return view( 'shapahs.shapah_telsheva' );
} );

Route::get( 'shapah_tamar', function () {
	return view( 'shapahs.shapah_tamar' );
} );

Route::get( 'institute_page', function () {
	return view( 'forms.institute_page' );
} );


Route::get( 'psyc-report', function () {
	return view( 'forms.psyc-report' );
} );


Route::get( 'match', function () {
	return view( 'forms.match' );
} );


Route::get( 'calc', function () {
	return view( 'forms.calc' );
} );

Route::get( 'delete-match', function () {
	return view( 'forms.delete_match' );
} );

Route::get( 'institute_page', function () {
	return view( 'forms.institute_page' );
} );


Route::get( 'institute_new', function () {
	return view( 'forms.institute_new' );
} );


Route::get( 'new_match', function () {
	return view( 'forms.new_match' );
} );


Route::get( 'new_psy', function () {
	return view( 'forms.new_psy' );
} );


Route::get( 'new_page', function () {
	return view( 'forms.new_page' );
} );

Route::get( 'visit_report', function () {
	return view( 'forms.visit_report' );
} );
