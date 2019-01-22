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

/*Rutas sin necesidad de loguearse*/
Route::get('/', 'ControllerPrincipal@index');
Route::get('/contactanos', 'ControllerPrincipal@contactanos');
Route::get('/linea-tiempo', 'ControllerPrincipal@linea_tiempo');
Route::get('/que-hacemos', 'ControllerPrincipal@que_hacemos');
Route::get('/quienes-somos', 'ControllerPrincipal@quienes_somos');
Route::get('/login-profesor', 'ControllerPrincipal@login_profesor');
Route::post('/login-profesor', 'AuthController@login');
//Route::get('/ingreso-notas/{id}/{nombre}/{apellido}', 'ControllerPrincipal@ingreso_notas')->name('ingreso-notas');

Route::get('/dash-login/{id}/n/{nombre}/p/{apellido}', 'ControllerPrincipal@dash_login')->name('dash-login');
Route::get('/dash-pruebas/{id}/n/{nombre}/p/{apellido}', 'ControllerPrincipal@dash_pruebas')->name('dash-pruebas');
Route::post('/dash-pruebas/creacion', 'PruebaController@create');
Route::put('/dash-pruebas/actualizacion', 'PruebaController@update');
Route::delete('/dash-pruebas/eliminacion', 'PruebaController@delete');
Route::get('/dash-notas/{id}/n/{nombre}/p/{apellido}', 'ControllerPrincipal@ingreso_notas')->name('dash-notas');
Route::get('/reporte', 'ControllerPrincipal@reporte');
Route::get('/logout', 'AuthController@logout');


Route::get('/prueba', function(){
	return view('ingreso_notas');
});