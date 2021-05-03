<?php

use App\Http\Controllers\portfolioController;
use App\Http\Controllers\MessagesController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/administracionChoferes', [portfolioController::class, 'index'])->name('Choferes');
Route::view('/contact', 'contact')->name('contact');
Route::post('contact', [MessagesController::class, 'store']);