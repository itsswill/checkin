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

Route::get('student/create', 'StudentController@index');
Route::post('students/create', 'StudentController@store');

Route::get('guardian/create', 'GuardianController@index');
Route::post('guardian/create', 'GuardianController@store');

Route::get('attendance/create', 'AttendanceController@index');
Route::post('attendance/create', 'AttendanceController@store');