<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductControler;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/product/create", [ProductControler::class,"viewform"])->name("product.viewform");
Route::post("/product/create", [ProductControler::class,"store_data"])->name("product.store_data");