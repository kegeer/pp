<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');



// Route::get('/batches/{id}/samples', ['uses' => 'BatchController@samples', 'as' => 'batches.samples']);
Route::resource('batches', 'BatchController');
// Route::resource('/batches/{id}/samples', 'SampleController');

Route::group(['prefix' => 'batches/{batch}', 'name' => 'batches'], function() {
	Route::resource('samples', 'SampleController');
});

Route::resource('clients', 'ClientController');
Route::resource('projects', 'ProjectController');
Route::resource('tasks', 'TaskController');
