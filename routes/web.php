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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//ruta de inicio del sistema
Route::get('/inicio', function () {
    return view('app.dashboard');
});

//rutas usuarios
Route::get('/usuarios/listado','UsuariosController@index')->middleware('auth');;
Route::get('/usuarios/nuevo','UsuariosController@create')->middleware('auth');;
Route::post('/usuarios/guardar','UsuariosController@store')->middleware('auth');;
Route::get('/usuarios/estado/{id}','UsuariosController@estados')->middleware('auth');;
Route::get('/usuarios/editar/{id}','UsuariosController@edit')->middleware('auth');;
Route::post('/usuarios/actualizar','UsuariosController@update')->middleware('auth');;


//rutas programas

// Route::get('/usuarios/nuevo', function () {
//     return view('app.usuarios.nuevo_usuario');
// });
