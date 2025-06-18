<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');

Route::get('/products/register', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/register', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/{product_id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product_id}/update', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product_id}/update', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product_id}/delete', [ProductController::class, 'destroy'])->name('products.destroy');
