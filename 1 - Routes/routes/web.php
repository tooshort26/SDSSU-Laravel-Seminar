<?php

Route::get('/', function () {
	return view('sample');
});


// Simple Route
Route::get('/test', function () {
	return 'Test Routes';
});

// Route name
Route::get('testing', function () {
	return 'Sample of route name';
})->name('name_of_route');


// Built-in Middleware
Route::get('/middleware', function () {
	return 'You are authorized user.';
})->middleware('auth');

// Custom Route Middleware
Route::get('/debug/message', function () {
	return 'Your App errors are expose.';
});

Route::get('/custom/middleware', function () {
	return 'Welcome to 18+ page.';
})->middleware('app_debug');


// Global Middleware


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
