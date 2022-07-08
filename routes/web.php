<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParadaController;

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
})->name('home');

// Route::get('prueba', function() {
//     return "Has accedido correctamente a esa ruta";
// })->middleware(['auth:sanctum','age']);

// Route::get('no-autorizado', function() {
//     return "no es mayor de edad";
// });

Route::get('prueba', function() {
    return view('mapa');
})->name('mapa');

// Ruta de la pestaña de administracion
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'auth.admin'
])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');
});
// Ruta para guardar formulario de agregar paradas
Route::post('agregar_paradas', [ParadaController::class, 'store'])->name('paradas.store');

// Ruta de pagina de contactanos
Route::get('contacto', function() { 
    return view('contacto');
})->name('contacto');

// Ruta de pagina de sobre nosotros nosotros
Route::get('sobre_nosotros', function() { 
    return view('sobre_nosotros'); 
})->name('sobre_nosotros');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Ruta Propensa a un cambio de nombre para agregar pestaña de otra funcionalidad
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/mapa', function () {
        return view('mapa');
    })->name('mapa');
});
