<?php

use App\Http\Controllers\ChoferController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\CombisController;
use App\Http\Controllers\LocacionesController;
use App\Http\Controllers\RutasController;
use App\Http\Controllers\PasajesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComentarioController;

Route::view('/', 'home')->name('home');

Route::get('/comprar', [PasajesController::class, 'index'])->name('Pasajes');
Route::get('/comprar/{id}', [PasajesController::class, 'show'])->name('Pasajes.show');
Route::get('/Pasajes/Pago', [PasajesController::class, 'create'])->name('Pasajes.create');
Route::get('/Pasajes/{id}/cancelar', [PasajesController::class, 'edit'])->name('Pasajes.editar');
Route::patch('/Pasajes/{id}', [PasajesController::class, 'update'])->name('Pasajes.actualizar');
Route::post('/Pasajes', [PasajesController::class, 'store'])->name('Pasajes.store');
Route::get('/Pasajes', [PasajesController::class, 'search'])->name('Pasajes.search');
Route::delete('/Pasajes/{id}', [PasajesController::class, 'destroy'])->name('Pasajes.eliminar');
Route::get('/Mis-Viajes/{id}', [PasajesController::class, 'pasajesUsuario'])->name('Pasajes.viajes');

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

Route::get('/comentarios', [ComentarioController::class, 'index'])->name('Comentario');
Route::get('/comentarios/agregar', [ComentarioController::class, 'create'])->name('Comentario.nuevo');
Route::post('/comentarios', [ComentarioController::class, 'store'])->name('Comentario.almacenar');
Route::get('/comentarios/{id}/editar', [ComentarioController::class, 'edit'])->name('Comentario.editar');
Route::patch('/comentarios/{id}', [ComentarioController::class, 'update'])->name('Comentario.actualizar');
Route::get('/comentarios/{id}', [ComentarioController::class, 'show'])->name('Comentario.show');
Route::delete('/comentarios/{id}', [ComentarioController::class, 'destroy'])->name('Comentario.eliminar');

Route::resource('/administracionViajes', 'ViajesController');
Route::resource('/administracionInsumos','InsumosController');

Route::resource('/administracionViajesChofer', 'ViajesChoferController');
Route::get('/administracionChoferes/{id}', [ChoferController::class, 'nueva'])->name('administracionViajesChofer.nueva');
Route::resource('/administracionPasajerosChofer', 'PasajerosChoferController');
Route::resource('/administracionReportes', 'ReportesController');
Route::resource('/administracionCompraChoferes', 'CompraChoferes');