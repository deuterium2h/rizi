<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@welcome');
Route::get('/about-us', 'PagesController@about_us');
Route::get('/local-news', 'PagesController@news');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('clearance', 'ClearanceController');
Route::resource('citizen', 'CitizenController');
Route::resource('permit', 'PermitController');
Route::resource('news', 'NewsController');

Route::get('apply-for-citizenship', 'ApplicantController@apply_for_citizen');
Route::get('applicant/citizen', 'ApplicantController@citizen');
Route::get('applicant/permit', 'ApplicantController@permit');
Route::get('apply-for-clearance', 'ApplicantController@apply_for_clearance');
Route::get('apply-for-permit', 'ApplicantController@apply_for_permit');
Route::get('apply-for-cedula', 'ApplicantController@apply_for_cedula');
Route::get('applicant/clearance', 'ApplicantController@clearance');
Route::get('applicant/cedula', 'ApplicantController@cedula');

