<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('products', function () {
   return Product::all(); 
});

Route::post('products', function () {
    $phpObj = json_decode(file_get_contents("php://input"),true);
    // var_dump($phpObj);die();
    $product = Product::create($phpObj);
   return json_encode($product);
});


