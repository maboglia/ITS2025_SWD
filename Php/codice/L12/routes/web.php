<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::post('/carts/add', [CartController::class, 'add'])->name('carts.add');

Route::post('/carts/remove', [CartController::class, 'remove'])->name('carts.remove');

Route::get('/carts', [CartController::class, 'index'])->name('carts.index');

