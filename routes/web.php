<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return "Home Page";
});

Route::get('products' ,[ProductController::class,'listproducts']);
Route::get('detalle' ,[ProductController::class,'detail']);