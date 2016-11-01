<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/users', function () {
    return App\User::all();
});
Route::get('/reports', 'Api\Report\ReportController@index');
Route::post('/report', 'Api\Report\ReportController@store');
Route::post('/report/meta', 'Api\Report\ReportController@storeMeta');
Route::post('/report/disease', 'Api\Report\ReportController@storeDisease');
Route::post('/report/patho', 'Api\Report\ReportController@storePatho');
Route::post('/report/genus', 'Api\Report\ReportController@storeGenus');
Route::post('/report/other', 'Api\Report\ReportController@storeOther');
Route::post('/report', 'Api\Report\ReportController@store');
Route::post('/report', 'Api\Report\ReportController@store');

Route::get('/report/{sample_id}', 'Api\Report\ReportController@find');