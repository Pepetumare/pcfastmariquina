<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\QuoteRequestController;
use App\Http\Controllers\MercadoPagoWebhookController;
use App\Http\Controllers\OrderTrackingController;

// Panel administrativo (protegido con middleware 'auth' y 'admin')
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    // CRUDs protegidos
    Route::resource('products', ProductController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('banners', BannerController::class)->except(['edit', 'show']);
    Route::resource('users', UserController::class)->except(['create', 'store', 'destroy']); // opcional
    Route::resource('categories', CategoryController::class); // opcional si usarás categorías
    Route::patch('/orders/{order}/estado', [\App\Http\Controllers\Admin\OrderController::class, 'updateStatus'])
    ->name('admin.orders.updateStatus');

});


Route::post('/webhooks/mercadopago', [MercadoPagoWebhookController::class, 'handle']);

Route::post('/cotizacion', [QuoteRequestController::class, 'store'])->name('quote.store');
// Sitio público (sin middleware)
Route::view('/', 'home')->name('home');
Route::view('/tienda', 'tienda.index')->name('tienda.index');
Route::view('/servicios', 'servicios')->name('servicios');
Route::view('/contacto', 'contacto')->name('contacto');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/carrito', 'carrito')->name('carrito');
Route::view('/checkout', 'checkout')->name('checkout');


Route::post('/carrito/agregar/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/carrito', [CartController::class, 'index'])->name('carrito');
Route::post('/carrito/actualizar/{id}', [CartController::class, 'update'])->name('cart.update');
Route::post('/carrito/eliminar/{id}', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/checkout', [CheckoutController::class, 'form'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');
Route::resource('orders', OrderController::class)->only(['index', 'show']);

Route::post('/checkout/mercadopago', [CheckoutController::class, 'redirectToMercadoPago'])->name('checkout.mp');
Route::get('/checkout/success', fn() => view('checkout.success'))->name('checkout.success');
Route::get('/checkout/failure', fn() => view('checkout.failure'))->name('checkout.failure');
Route::get('/checkout/pending', fn() => view('checkout.pending'))->name('checkout.pending');

Route::get('/seguimiento', [OrderTrackingController::class, 'form'])->name('tracking.form');
Route::post('/seguimiento', [OrderTrackingController::class, 'check'])->name('tracking.check');


// Breeze Auth
require __DIR__ . '/auth.php';
