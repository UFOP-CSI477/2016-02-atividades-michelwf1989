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

Route::get('/home', function(){
	return view('home2');
});

Route::get('/', function () {
    return view('home2');
});

Route::get('/eventos', 'EventosController@index');

//-------------------------------------------------------------------------->>
Route::get('/admin', 'AdmsController@index');
Route::get('/admin/listaAtletas', 'AdmsController@listaAtletas');

Route::get('/admin/listaRegistroEvento', 'AdmsController@indexEvento');
Route::post('/admin/listaRegistroEvento', 'AdmsController@listaRegistroEvento');

Route::get('/admin/listaRegistroAtleta', 'AdmsController@indexAtleta');
Route::post('/admin/listaRegistroAtleta', 'AdmsController@listaRegistroAtleta');
//-------------------------------------------------------------------------->>			
			
Route::get('/atletas', 'AtletasController@index');
Route::get('/atletas/incluirRegistro', 'AtletasController@incluirRegistro');
Route::post('/atletas/incluirRegistro', 'AtletasController@salvaRegistro');

Auth::routes();
Route::get('/atletas/login', 'AtletasController@index');
Route::post('/atletas/login', 'Auth\LoginController@login');
Route::get('/atletas/logout', 'Auth\LoginController@logout');
// Route::get('/atletas/cadastro', 'Auth\RegisterController@showRegistrationForm');
// Route::post('/atletas/cadastro', 'Auth\RegisterController@register');


// Route::get('/home', 'HomeController@index');
//Route::get('/', function () {return view('welcome');});

