<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'product']);
Route::get('/products/register', [ProductController::class, 'add']);

Route::post('/products/register', [ProductController::class, 'register']);
