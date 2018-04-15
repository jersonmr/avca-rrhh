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

Route::group(['middleware' => 'guest'], function() {
    Route::get('/', function () {
        return view('rrhh');
    });
    Route::get('oportunidades/{cargo}', 'LandingController@opportunities')->name('opportunities');
    Route::get('subcargo', 'LandingController@subcargo');
});

/*Route::get('rrhh', function () {
    return view('rrhh');
});*/

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('dashboard', function() {
        return view('admin.gerente.dashboard', $data = [], $mergeData = []);
    })->name('gerente.dashboard');
    Route::get('obtener-profesiones', 'EmpleadoController@obtenerProfesiones');
    Route::get('obtener-departamentos', 'EmpleadoController@obtenerDepartamentos');
    Route::get('obtener-profesiones/{nivel_academico}', 'EmpleadoController@obtenerProfesiones');
    Route::get('obtener-bancos', 'EmpleadoController@obtenerBancos');
    Route::get('obtener-estados', 'EmpleadoController@obtenerEstados');
    Route::get('obtener-tabulador', 'EmpleadoController@obtenerTabuladorSalarial');

    Route::group(['prefix' => 'vacante'], function() {
        Route::get('crear-vacante', 'VacanteController@create')->name('vacante.create');
        Route::post('publicar-vacante', 'VacanteController@store')->name('vacante.store');
    });
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('obtener-sucursales', 'EmpleadoController@obtenerSucursales');
    Route::get('obtener-cargos', 'EmpleadoController@obtenerCargos');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
