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

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/github', 'Auth\LoginController@redirectToGithub')->name('github');
Route::get('login/github/callback', 'Auth\LoginController@handleGithubCallback');

Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('google');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');

