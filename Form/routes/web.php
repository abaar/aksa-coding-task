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
Route::view('/','home');


Route::name('tugas1.')->group(function(){
	Route::post('/tugas1/submitpost','FormController@showpost')->name('show.post');
	Route::put('/tugas1/submitput','FormController@showpost')->name('show.put');
	Route::view('/tugas1/home','tugas1.tugas1')->name('home');
	Route::name('form.')->group(function(){
		Route::view('/tugas1/formpost','tugas1.form')->name('post');
		Route::view('/tugas1/formput','tugas1.formput')->name('put');
	});
});





Route::name('tugas2.')->group(function(){
	Route::post('/tugas2/submitpost','FormController@showpost_2')->name('show.post');
	Route::put('/tugas2/submitput','FormController@showpost_2')->name('show.put');


	Route::name('form.')->group(function(){
		Route::view('/tugas2/formpost','tugas2.forms.form')->name('post');
		Route::view('/tugas2/formput','tugas2.forms.formput')->name('put');
		Route::view('/tugas2/formresult','tugas2.forms.result')->name('result');
	});

	Route::name('ui-element.')->group(function(){
		Route::view('/tugas2/panel-wells','tugas2.uiElement.panelandwells')->name('panel-wells');
		Route::view('/tugas2/buttons','tugas2.uiElement.buttons')->name('buttons');
		Route::view('/tugas2/notification','tugas2.uiElement.notif')->name('notif');
		Route::view('/tugas2/typography','tugas2.uiElement.typography')->name('typography');
		Route::view('/tugas2/icons','tugas2.uiElement.icons')->name('icons');
		Route::view('/tugas2/grid','tugas2.uiElement.grid')->name('grid');
	});

	Route::name('sample.')->group(function(){
		Route::view('/tugas2/blank','tugas2.samplePages.blank')->name('blank');
		Route::view('/tugas2/login','tugas2.samplePages.login')->name('login');
	});

	Route::name('charts.')->group(function(){
		Route::view('/tugas2/flot','tugas2.charts.flot')->name('flot');
		Route::view('/tugas2/morris','tugas2.charts.morris')->name('morris');
	});

	Route::name('dashboard.')->group(function(){
		Route::view('/tugas2/dashboard','tugas2.dashboard.dashboard')->name('dashboard');
	});

	Route::name('tables.')->group(function(){
		Route::view('/tugas2/table','tugas2.tables.table')->name('table');
	});
});

Route::name('tugas3.')->group(function(){
	Route::view('/tugas3/dashboard','tugas3.dashboard.dashboard')->name('dashboard');

	Route::post('/tugas3/formpost','FormController@showpost_3')->name('show.post');

	Route::name('form.')->group(function(){
		Route::view('/tugas3/formpost','tugas3.forms.form')->name('post');
		Route::view('/tugas3/formresult','tugas3.forms.result')->name('result');
	});
});


Route::name('tugas4.')->group(function(){
	Route::get('/tugas4/dashboard','tugas4Controller@showform')->name('show.form');
	Route::get('/tugas4/input/formproduct','tugas4Controller@inputform')->name('input.form');
	Route::get('/tugas4/show/product','tugas4Controller@showproduct')->name('show.product');
});


Route::name('tugas5.')->group(function(){
	Route::get('/tugas5/dashboard','tugas5Controller@showform')->name('show.form');
	Route::get('/tugas5/input/article','tugas5Controller@inputarticle')->name('input.form');
	Route::get('/tugas5/show/article','tugas5Controller@showarticle')->name('show.article');
	Route::get('/tugas5/show/category','tugas5Controller@showcategory')->name('show.category');
});