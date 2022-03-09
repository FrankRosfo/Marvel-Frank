<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| Rutas para personajes
|--------------------------------------------------------------------------
|
| Establece una ruta con la API de Marvel para mostrar personajes
|
*/

Route::get('/',[ApiController::class, 'comics'])->name('inicio');

Route::get('detalles/{id}',[ApiController::class, 'detallePersonaje'])->name('detalle.personaje');
