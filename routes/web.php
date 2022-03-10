<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\GeneralController;

/*
|--------------------------------------------------------------------------
| Rutas raiz
|--------------------------------------------------------------------------
|
| Rutas para redirigir a inicio
|
*/

Route::get('/', [GeneralController::class,'raiz'])->name('raiz');

/*
|--------------------------------------------------------------------------
| Rutas Api
|--------------------------------------------------------------------------
|
| Rutas hacia la API-Marvel
|
*/

Route::get('/',[ApiController::class, 'comics'])->name('inicio');

Route::get('detalles/{id}',[ApiController::class, 'detallePersonaje'])->name('detalle.personaje');

/*
|--------------------------------------------------------------------------
| Rutas de registro
|--------------------------------------------------------------------------
|
| Rutas para el registro y guardar datos
|
*/

Route::post('/registro', [RegisterController::class, 'guardar'])->name('registro.guardar');

Route::get('/registro', [RegisterController::class, 'create'])->middleware('guest')->name('registro');

/*
|--------------------------------------------------------------------------
| Rutas de login y logout
|--------------------------------------------------------------------------
|
| Rutas para el registro y guardar datos
|
*/

Route::post('/login', [SessionController::class, 'ingresar'])->name('login.ingresar');

Route::get('/login', [SessionController::class, 'create'])->middleware('guest')->name('login');

Route::get('/logout', [SessionController::class, 'destroy'])->middleware('auth')->name('login.destroy');

/*
|--------------------------------------------------------------------------
| Rutas de correo
|--------------------------------------------------------------------------
|
| Rutas para enviar correos
|
*/

Route::post('/mail', [MailController::class, 'getMail']);

/*
|--------------------------------------------------------------------------
| Rutas de vistas
|--------------------------------------------------------------------------
|
| Rutas para ver las vistas (->middleware('auth') = validar estar registrado)
|
*/

Route::get('/inicio', function () {
    return view('index');
})->name('inicio');

Route::get('/contacto', function () {
    return view('contact');
})->name('contacto');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/detalles', function () {
    return view('details');
})->name('Detalles');