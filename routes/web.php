<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

//Eshop
Route::get('/', [PageController::class, 'home']);
Route::get('/product-detail', [PageController::class, 'productDetail']);