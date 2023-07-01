<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgenteValorantController;
use App\Http\Controllers\MapaController;
use App\Http\Controllers\GamemodeController;
use App\Http\Controllers\TitulosController;
use App\Http\Controllers\PlayerCardController;
use App\Http\Controllers\LevelBorderController;


Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/consultas', [App\Http\Controllers\HomeController::class, 'consultas'])->name('consultas');
Route::get('/consultas/send', [App\Http\Controllers\HomeController::class, 'consulta_respuesta'])->name('consulta_respuesta');

Route::controller(AgenteValorantController::class)->group(function () {
    Route::get('/agente', 'index_agente')->name('index_agente');
    Route::get('/agente/data', 'get_data');
});

Route::controller(MapaController::class)->group(function () {
    Route::get('/mapa', 'index_mapa')->name('index_mapa');
});

Route::controller(GamemodeController::class)->group(function () {
    Route::get('/tipo-de-juegos', 'index_gamemode')->name('index_gamemode');
});

Route::controller(TitulosController::class)->group(function () {
    Route::get('/titulos-jugador', 'index_titulo')->name('index_titulo');
});

Route::controller(PlayerCardController::class)->group(function () {
    Route::get('/Player-card', 'index_player')->name('index_player');
});

Route::controller(LevelBorderController::class)->group(function () {
    Route::get('/level-border', 'index_lvlBorder')->name('index_lvlBorder');
});
