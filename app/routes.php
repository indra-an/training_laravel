<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => '/', 'uses' => 'PhotoController@index'));
Route::resource('img', 'PhotoController');

Route::resource('articles', 'ArticleController');
Route::resource('comments', 'CommentController');
Route::resource('users', 'UsersController', array('except' => array('index', 'destroy')));
Route::resource('sessions', 'SessionsController', array('except' => array('index')));


// ------------------------------------- Import/Export Excel ---------------------------

Route::get('/export-excel/{article_id}', array('as' => 'export-excel', 'uses' => 'ArticleController@export'));
Route::get('/import', array('as' => 'import','uses' =>'ArticleController@form_import'));
Route::post('/import-excel', array('as' => 'import-excel','uses' =>'ArticleController@import'));


// ------------------------------------- Forget Password --------------------------------

Route::get('/reset-password', array('as' => 'reset-password', 'uses' => 'UsersController@reset_password'));
Route::post('/process-reset-password', array('as' => 'process-reset-password', 'uses' => 'UsersController@process_reset_password'));
Route::get('/change-password/{forgot_token}', array('as' => 'change-password', 'uses' => 'UsersController@change_password'));
Route::post('/process-change-password/{forgot_token}', array('as' => 'process-change-password', 'uses' => 'UsersController@process_change_password'));