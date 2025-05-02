<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\QuoteController;
use App\Http\Controllers\Admin\BannerController;

// Panel administrativo (protegido con middleware 'auth' y 'admin')
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    // CRUDs protegidos
    Route::resource('products', ProductController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('quotes', QuoteController::class)->only(['index', 'show']);
    Route::resource('banners', BannerController::class)->except(['edit', 'show']);
    Route::resource('users', UserController::class)->except(['create', 'store', 'destroy']); // opcional
    Route::resource('categories', CategoryController::class); // opcional si usarás categorías
});

// Sitio público (sin middleware)
Route::view('/', 'home')->name('home');
Route::view('/tienda', 'tienda.index')->name('tienda.index');
Route::view('/servicios', 'servicios')->name('servicios');
Route::view('/contacto', 'contacto')->name('contacto');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/carrito', 'carrito')->name('carrito');
Route::view('/checkout', 'checkout')->name('checkout');

// Breeze Auth
require __DIR__.'/auth.php';
