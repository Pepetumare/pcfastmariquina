<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/tienda', 'tienda.index')->name('tienda.index');
Route::view('/servicios', 'servicios')->name('servicios');
Route::view('/contacto', 'contacto')->name('contacto');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/carrito', 'carrito')->name('carrito');

require __DIR__.'/auth.php';
