<?php

//Login and Registration Routes and Controller
Auth::routes();

/**
 * Pages Controller
 */

//End-User Pages
Route::get('/', 'PagesController@welcome');
Route::get('/about-us', 'PagesController@about_us');

//News Page
Route::get('/local-news', 'PagesController@news');
Route::get('/local-news/{id}', 'PagesController@news_post');

//Activities Page
Route::get('/brgy-activities', 'PagesController@activities');
Route::get('/brgy-activities/{id}', 'PagesController@activity_post');

//CMS
Route::get('/home', 'HomeController@index');

//Clearance Controller
Route::resource('clearance', 'ClearanceController');

//Citizen Controller
Route::resource('citizen', 'CitizenController');

//Permit Controller
Route::resource('permit', 'PermitController');

//Cedula Controller
Route::resource('cedula', 'CedulaController');

//Activity Controller
Route::resource('activity', 'ActivityController');
Route::post('activity/{$id}/photos', ['as' => 'store_photo_path', 'uses' => 'ActivityController@addPhoto']);
Route::delete('photos/{$id}', 'ActivityController@destroyPhoto');

//News Controller
Route::resource('news', 'NewsController');
Route::post('news/{id}/photos', ['as' => 'store_photo_path', 'uses' => 'NewsController@addPhoto']);
Route::delete('photos/{id}', 'NewsController@destroyPhoto');

//Applicant Controller
Route::get('apply-for-citizenship', 'ApplicantController@apply_for_citizen');
Route::post('apply-for-citizenship', 'ApplicantController@store_citizen');

Route::get('apply-for-cedula', 'ApplicantController@apply_for_cedula');
Route::post('apply-for-cedula', 'ApplicantController@store_cedula');

Route::get('apply-for-permit', 'ApplicantController@apply_for_permit');
Route::post('apply-for-permit', 'ApplicantController@store_permit');

Route::get('apply-for-clearance', 'ApplicantController@apply_for_clearance');
Route::post('apply-for-clearance', 'ApplicantController@store_clearance');
