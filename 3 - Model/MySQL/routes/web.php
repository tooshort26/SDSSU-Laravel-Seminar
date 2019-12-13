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

Route::get('/one/to/one', 'OneToOneController@index');
Route::get('/one/to/many', 'OneToManyController@index');
Route::get('/many/to/many', 'ManyToManyController@index');

Route::get('/poly/one/to/one', 'PolymorphicOneToOneController@index');
Route::get('/poly/one/to/many/post', 'PolymorphicOneTomanyController@post');
Route::get('/poly/one/to/many/video', 'PolymorphicOneTomanyController@video');


