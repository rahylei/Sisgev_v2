<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/', function(){
    return view('auth/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', [SiteController::class, 'index'])->name('dashboard');
    
    Route::get('/lineas', [SiteController::class, 'lineas'])->name('lineas');
    Route::get('/personal', [SiteController::class, 'personal'])->name('personal');
    Route::get('/piezas', [SiteController::class, 'piezas'])->name('piezas');
    Route::get('/almacen', [SiteController::class, 'almacen'])->name('almacen');
    Route::get('/rmUsuario/{id}', [SiteController::class, 'rmUsuario'])->name('rmUsuario');
    Route::post('/altaUsuario', [SiteController::class, 'altaUsuario'])->name('altaUsuario');
    Route::post('/upUsuario', [SiteController::class, 'upUsuario'])->name('upUsuario');
    Route::post('/altaPieza', [SiteController::class, 'altaPieza'])->name('altaPieza');
    Route::get('/rmPieza/{id}', [SiteController::class, 'rmPieza'])->name('rmPieza');
    Route::post('/upPieza', [SiteController::class, 'upPieza'])->name('upPieza');
    Route::post('/altaLinea', [SiteController::class, 'altaLinea'])->name('altaLinea');
    Route::get('/rmLinea/{id}', [SiteController::class, 'rmLinea'])->name('rmLinea');
    Route::post('/upLinea', [SiteController::class, 'upLinea'])->name('upLinea');
    Route::post('/altaAlmacen', [SiteController::class, 'altaAlmacen'])->name('altaAlmacen');
    Route::get('/rmAlmacen/{id}', [SiteController::class, 'rmAlmacen'])->name('rmAlmacen');
    Route::post('/upAlmacen', [SiteController::class, 'upAlmacen'])->name('upAlmacen');
});
