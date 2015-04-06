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

Route::get('/', 'PostController@index');

Route::get('/posts.{format?}', [
    'as' => 'posts',
    'uses' => 'PostController@index'
])
->where('format', 'html|json');

Route::get('/posts/{slug}', [
    'as' => 'post',
    'uses' => 'PostController@show'
]);

Route::get('/users/{name}', [
    'as' => 'user',
    'uses' => 'UserController@show'
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
