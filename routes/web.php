<?php

use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\AmpayerController;
use App\Http\Controllers\jugadoresController;
use Illuminate\Support\Facades\Route;
use App\Models\equipos;

Route::view('/', 'home')->name('inicio');

Route::view('/rules', 'rules')->name('reglas');

Route::view('/tabla', 'tabla');

//AMPAYERS ROUTES

Route::get('/ampayercreate', [Ampayercontroller::class, 'create'])->name('ampayer_create');

Route::get('/ampayeredit/{id_ampayer}', [Ampayercontroller::class, 'edit'])->name('ampayer_edit');

Route::post('/ampayerupdate', [Ampayercontroller::class, 'update'])->name('ampayer_update');

Route::get('/ampayers', [Ampayercontroller::class, 'index'])->name('ampayer_index');

Route::post('/ampayerstore', [Ampayercontroller::class, 'store'])->name('ampayer_store');

Route::get('/ampayer/{id_ampayer}', [Ampayercontroller::class, 'show'])->name('ampayer_show');

Route::get('/ampayerdown/{id_ampayer}', [Ampayercontroller::class, 'down'])->name('ampayer_down');

//JUGADORES ROUTES

Route::get('/jugadorcreate', [jugadoresController::class, 'create'])->name('jugador_form');

Route::get('/jugadoredit/{id_afiliacion}', [jugadoresController::class, 'edit'])->name('jugador_form_act');

Route::post('/jugadorupdate', [jugadoresController::class, 'update'])->name('jugador_update');

Route::get('/jugadores', [jugadoresController::class, 'index'])->name('jugadores');

Route::post('/jugadorstore', [jugadoresController::class, 'store'])->name('jugador_store');

Route::get('/jugador/{id_afiliacion}', [jugadoresController::class, 'show']);

Route::get('/jugadorbaja/{id_afiliacion}', [jugadoresController::class, 'destroy'])->name('jugador_baja');

//----------------------------------------------------------------------------------//
//

Route::view('/Estadisticas', 'Estadisticas')->name('Estadisticas');

Route::view('/resultado', 'resultado');

Route::view('/login', 'login.inicioSesion')->name('login');

Route::view('/EstadisticaEquipo', 'EstadisticaEquipo')->name('EstadisticaEquipo');

Route::get('/calendario', 'CalendarioController@index')->name('calendario');

Route::get('/partidos/proximos', 'jugadoresController@proximosPartidos')->name('partidos.proximos');

//---------------------------------------------------------------------------------//
//BATEADORES
Route::view('/bateadores', 'bateadores');

?>