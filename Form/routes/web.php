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
    return view('home');
})->name('home');

Route::post('/submitpost','FormController@showpost')->name('show.post');

Route::put('/submitput','FormController@showpost')->name('show.put');

Route::view('/formpost','form')->name('form.post');

Route::view('/formput','formput')->name('form.put');