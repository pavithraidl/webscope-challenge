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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::post('todo-column', 'TodoColumnController@store');

Route::put('todo-column/{id}', 'TodoColumnController@update');

Route::post('todo-card', 'TodoCardController@store');

Route::put('todo-card/{id}', 'TodoCardController@update');

Route::get('/get-chart-data/', 'ChartDataController@getChartData');
