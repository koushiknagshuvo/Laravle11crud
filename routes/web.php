<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductControler;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/product/create', function () {
//     return view('product.create');
// });

Route::get('/product/create',[ProductControler::class,'create'])->name('product.create');