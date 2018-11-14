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
Route::get('/about', 'PageController@about')->name('about');
Route::get('/services', 'PageController@services')->name('services');
Route::get('/services/audio', 'PageController@audio')->name('audio');
Route::get('/services/video', 'PageController@video')->name('video');
Route::get('/services/clothes', 'PageController@clothes')->name('clothes');
Route::get('/services/visage', 'PageController@visage')->name('visage');
Route::get('/services/makeup', 'PageController@makeup')->name('makeup');
Route::get('/projects', 'PageController@projects')->name('projects');
Route::get('/contacts', 'PageController@contacts')->name('contacts');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
