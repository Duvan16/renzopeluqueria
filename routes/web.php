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

Route::resource('/homeAdmin', 'HomeAdminController');

Route::resource('/homeEstilista', 'HomeEstilistaController');

Route::resource('/servicios', 'ServicioController');

Route::get('/servicios/{id}/confirmDelete', 'ServicioController@confirmDelete');

Route::resource('/usuarios', 'UserController');

Route::get('/usuarios/{id}/confirmDelete', 'UserController@confirmDelete');

Route::resource('/pagos', 'PagoController');

Route::resource('/citas', 'CitaController');

Route::resource('/horario', 'HorarioController');

Route::resource('/perfilcliente', 'PerfilClienteController');

