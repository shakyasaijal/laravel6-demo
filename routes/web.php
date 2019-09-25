<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', function() {
    return 'This is profile';
})->middleware('verified');

Route::resource('/posts', 'PostsController');
