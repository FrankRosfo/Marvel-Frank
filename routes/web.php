<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MailController;            //Controlador de correo
use App\Http\Controllers\RegisterController;        //Controlador de Registro
use App\Http\Controllers\SessionController;         //Controlador de Secion
use App\Http\Controllers\GeneralController;         //Controlador de inicio
use App\Http\Controllers\PersonajesApiController;   //Controlador Api de personajes
use App\Http\Controllers\ComicsApiController;       //Controlador Api de Comics

/*
|--------------------------------------------------------------------------
| Ruta General / Ruta raiz para enviar a un inicio
|--------------------------------------------------------------------------
*/

Route::get('/',[GeneralController::class, 'raiz'])->name('raiz');

Route::get('/inicio',[GeneralController::class, 'inicio'])->middleware('auth')->name('inicio');

Route::post('/resultados',[GeneralController::class, 'buscar'])->name('resultados');

/*
|--------------------------------------------------------------------------
| Rutas Api / Rutas hacia la API-Marvel / personajes
|--------------------------------------------------------------------------
*/

Route::get('/personajes/{page}',[PersonajesApiController::class, 'personajes'])->name('personajes');

Route::get('/detapersonajes/{id}',[PersonajesApiController::class, 'detallePersonajes'])->middleware('auth')->name('detalle.personaje');

/*
|--------------------------------------------------------------------------
| Rutas Api / Rutas hacia la API-Marvel / comics
|--------------------------------------------------------------------------
*/

Route::get('/comics',[ComicsApiController::class, 'comics'])->middleware('auth')->name('comics');

Route::get('detacomics/{id}',[ComicsApiController::class, 'detalleComics'])->middleware('auth')->name('detalle.comic');

/*
|--------------------------------------------------------------------------
| Rutas de registro / Rutas para el registro y guardar datos
|--------------------------------------------------------------------------
*/

Route::get('/registro', [RegisterController::class, 'create'])->middleware('guest')->name('registro');

Route::post('/registro', [RegisterController::class, 'guardar'])->name('registro.guardar');

/*
|--------------------------------------------------------------------------
| Rutas de login y logout / Rutas para el registro y guardar datos
|--------------------------------------------------------------------------
*/

Route::get('/login', [SessionController::class, 'create'])->middleware('guest')->name('login');

Route::post('/login', [SessionController::class, 'ingresar'])->name('login.ingresar');

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
})->middleware('auth')->name('contacto');

Route::get('/datalles', function () {
    return view('tamplate.details');
})->middleware('auth')->name('detalles');