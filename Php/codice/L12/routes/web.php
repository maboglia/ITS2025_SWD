<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::post('/carts/add', [CartController::class, 'add'])->name('carts.add');
Route::post('/carts/remove', [CartController::class, 'remove'])->name('carts.remove');
Route::get('/carts', [CartController::class, 'index'])->name('carts.index');

Route::get('/publishers', [PublisherController::class, 'index'])->name('publishers.index');
Route::get('/publishers/{publisher}', [PublisherController::class, 'show'])->name('publishers.show');

Route::get('/games', [GameController::class, 'index'])->name('games.index');
Route::get('/games/{game}', [GameController::class, 'show'])->name('games.show');

Route::get('/php/argomenti', [ItemController::class, 'index'])->name('php.index');