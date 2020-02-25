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

Route::get('/form' , 'profilscontroller@form');

Route::post('/form/5','profilscontroller@store');

Route::get('/form/liste','profilscontroller@liste_cv');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
