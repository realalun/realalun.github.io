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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'LayoutController@index');

Route::post('/submit', 'LayoutController@submit');

/*Route::match(['get','post'], 'layouts/index','LayoutController@submit');*/

/*Route::get('/about', 'LayoutController@index');

Route::get('/clients', 'LayoutController@index');

Route::get('/services', 'LayoutController@index');

Route::get('/portfolio', 'LayoutController@index');

Route::get('/contact', 'LayoutController@index');*/