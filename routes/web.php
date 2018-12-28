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

Route::get('/trainer/{id?}', 'TrainerController@prueba');

Route::resource('/trainers','TrainerController2');

Route::get('/trainers/create','TrainerController2@create');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
