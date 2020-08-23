<?php

use Illuminate\Support\Facades\Route;

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
//Aplicamos middleware CORS a las rutas para que no las bloquee LAravel al consumirlas desde el front


  Route::post('/login', 'UserController@login');
  Route::get('/incidencias', 'IncidenciaController@show');
  Route::post('/incidencias/{reportador}/{fecha}', 'IncidenciaController@seleccionIncidencia');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
