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


Route::get('/{facility_cd}/labels/', 'LabelController@index');
Route::post('/{facility_cd}/labels/store', 'LabelController@store');
Route::get('/{facility_cd}/labels/{id}', 'LabelController@show');
Route::post('/{facility_cd}/labels/{id}/update', 'LabelController@update');
Route::get('/{facility_cd}/labels/{id}/delete', 'LabelController@destroy');