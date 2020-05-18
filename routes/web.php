<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home','HomeController@index');
Auth::routes();
Route::post('/p','PostController@store');
Route::get('/p/create','PostController@create')->middleware(['auth']); 
Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');
