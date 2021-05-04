<?php

use App\Http\Controllers\ChoferController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\CombisController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::get('/administracionChoferes', [ChoferController::class, 'index'])->name('Choferes');
Route::get('/administracionChoferes/agregar', [ChoferController::class, 'create'])->name('Choferes.nuevo');
Route::post('/administracionChoferes', [ChoferController::class, 'store'])->name('Choferes.almacenar');
Route::get('/administracionChoferes/{id}', [ChoferController::class, 'show'])->name('Choferes.show');

Route::view('/contact', 'contact')->name('contact');
Route::post('contact', [MessagesController::class, 'store']);

Route::get('/administracionCombis', [CombisController::class, 'index'])->name('administracionCombis');
Route::resource('/administracionCombis','CombisController')->except(['index']);
