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

//ruta de inicio del sistema
Route::get('/inicio', function () {
    return view('app.dashboard');
});

//rutas usuarios
Route::get('/usuarios/listado','UsuariosController@index');
Route::get('/usuarios/nuevo','UsuariosController@create');
Route::post('/usuarios/guardar','UsuariosController@store');

//rutas programas

// Route::get('/usuarios/nuevo', function () {
//     return view('app.usuarios.nuevo_usuario');
// });
