<?php

use App\Http\Controllers\ChoferController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\CombisController;
use App\Http\Controllers\LocacionesController;
use App\Http\Controllers\RutasController;
use App\Http\Controllers\UserController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::get('/administracionChoferes', [ChoferController::class, 'index'])->name('Choferes');
Route::get('/administracionChoferes/agregar', [ChoferController::class, 'create'])->name('Choferes.nuevo');
Route::get('/administracionChoferes/{id}/editar', [ChoferController::class, 'edit'])->name('Choferes.editar');
Route::patch('/administracionChoferes/{id}', [ChoferController::class, 'update'])->name('Choferes.actualizar');
Route::post('/administracionChoferes', [ChoferController::class, 'store'])->name('Choferes.almacenar');
Route::get('/administracionChoferes/{id}', [ChoferController::class, 'show'])->name('Choferes.show');
Route::delete('/administracionChoferes/{id}', [ChoferController::class, 'destroy'])->name('Choferes.eliminar');

Route::view('/contact', 'contact')->name('contact');
Route::post('contact', [MessagesController::class, 'store']);

Route::get('/administracionCombis', [CombisController::class, 'index'])->name('administracionCombis');
Route::resource('/administracionCombis','CombisController')->except(['index']);

Route::get('/administracionLocaciones', [LocacionesController::class, 'index'])->name('administracionLocaciones');
Route::resource('/administracionLocaciones','LocacionesController')->except(['index']);

Route::get('/administracionRutas', [RutasController::class, 'index'])->name('administracionRutas');
Route::resource('/administracionRutas','RutasController')->except(['index']);

Auth::routes();

Route::get('/areaPersonal/{id}', [UserController::class, 'show'])->name('User.show');
Route::get('/areaPersonal/{id}/editar', [UserController::class, 'edit'])->name('User.editar');
Route::patch('/areaPersonal/{id}', [UserController::class, 'update'])->name('User.actualizar');

Route::resource('/administracionViajes', 'ViajesController');
Route::resource('/administracionInsumos','InsumosController');
