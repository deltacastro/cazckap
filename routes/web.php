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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/memoria', function() {
	return view('memoria');
})->middleware('auth');
Route::get('/test', function() {
	return view('test');
});
Route::get('/quienesSomos', function() {
	return view('aboutUs');
});

Route::get('/articulos/comoSepararBasura', function() {
	return view('comoSepararBasura');
})->middleware('auth');

Route::group(['prefix' => 'admin'], function() {
	Route::resource('pregunta', 'PreguntaController', ['parameters' => ['pregunta']])->middleware('auth');
});