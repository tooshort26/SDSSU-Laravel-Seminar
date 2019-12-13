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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/sample', 'SampleController@sample');
Route::get('/sample', function () {
	return view('sample');
});

Route::get('/name', 'SampleController@index');
Route::resource('route', 'SampleControllerResource');
Route::get('/admin/dashboard', 'SampleController@dashboard');