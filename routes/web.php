<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MailController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\GeneralController;

/*
|--------------------------------------------------------------------------
| Ruta General / Ruta raiz para enviar a un inicio
|--------------------------------------------------------------------------
*/

Route::get('/',[GeneralController::class, 'raiz'])->name('raiz');

Route::get('/inicio',[GeneralController::class, 'inicio'])->name('inicio');

/*
|--------------------------------------------------------------------------
| Rutas Api / Rutas hacia la API-Marvel / personajes
|--------------------------------------------------------------------------
*/

Route::get('/personajes',[PersonajesApiController::class, 'personajes'])->name('personajes');

Route::get('/detapersonajes/{id}',[PersonajesApiController::class, 'detallePersonajes'])->name('detalle.personaje');

/*
|--------------------------------------------------------------------------
| Rutas Api / Rutas hacia la API-Marvel / comics
|--------------------------------------------------------------------------
*/

Route::get('/comics',[ComicsApiController::class, 'comics'])->name('inicio');

Route::get('detacomics/{id}',[ComicsApiController::class, 'detalleComics'])->name('detalle.comic');

/*
|--------------------------------------------------------------------------
| Rutas de registro / Rutas para el registro y guardar datos
|--------------------------------------------------------------------------
*/

Route::post('/registro', [RegisterController::class, 'guardar'])->name('registro.guardar');

Route::get('/registro', [RegisterController::class, 'create'])->middleware('guest')->name('registro');

/*
|--------------------------------------------------------------------------
| Rutas de login y logout / Rutas para el registro y guardar datos
|--------------------------------------------------------------------------
*/

Route::post('/login', [SessionController::class, 'ingresar'])->name('login.ingresar');

Route::get('/login', [SessionController::class, 'create'])->middleware('guest')->name('login');

Route::get('/logout', [SessionController::class, 'destroy'])->middleware('auth')->name('login.destroy');

/*
|--------------------------------------------------------------------------
| Rutas de correo / Rutas para enviar correos
|--------------------------------------------------------------------------
*/

Route::post('/mail', [MailController::class, 'getMail']);

/*
|--------------------------------------------------------------------------
| Rutas de vistas / Rutas para ver las vistas (->middleware('auth') = 
| validar estar registrado)
|--------------------------------------------------------------------------
*/

Route::get('/contacto', function () {
    return view('contact');
})->name('contacto');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/detalles', function () {
    return view('details');
})->name('Detalles');