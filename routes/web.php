<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
})->middleware('guest');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// ruta para usuarios
Route::get('/usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('usuarios.index');
// ruta para clientes
Route::get('/clientes', [App\Http\Controllers\ClientController::class, 'index'])->name('clientes.index');
// ruta para productos
Route::get('/productos', [App\Http\Controllers\ProductController::class, 'index'])->name('productos.index');
// ruta para proveedores
Route::get('/proveedores', [App\Http\Controllers\ProviderController::class, 'index'])->name('proveedores.index');

// Ruta crear usuarios
Route::get('/usuarios/create',[App\Http\Controllers\UserController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios/create',[App\Http\Controllers\UserController::class, 'store'])->name('usuarios.store');
