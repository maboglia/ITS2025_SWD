<?php

use App\Http\Controllers\AutoreController;
use App\Http\Controllers\EditoreController;
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['titolo'=>'Libreria Web Laravel']);
})->name('home');

//Route::resource('/libri', LibroController::class);

Route::get('/libri', [LibroController::class, 'index'])->name('libri.index');
Route::get('/libri/{id}', [LibroController::class, 'show']);

Route::resource('/editori', EditoreController::class);

Route::resource('/autori', AutoreController::class);