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


Route::get('/','ContactController@index');
Route::get('contact/detail/{id}', [
    'as'=> 'detail',
    'uses' => 'ContactController@show'
]);
Route::get('contact/{id}', [
    'as'=> 'suppression',
    'uses' => 'ContactController@destroy'
]);
Route::match(['get','post'],'contact/ajouter', [
    'as'=> 'ajouter',
    'uses' => 'ContactController@create',
]);
Route::get('contact/ajoute', [
    'as'=> 'ajou',
    'uses' => 'ContactController@ajout',
]);
