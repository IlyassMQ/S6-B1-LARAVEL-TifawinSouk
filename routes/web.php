<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


//CATEGORY routes 
Route::get('/category', [CategorieController::class, 'index'])->name('category.index');
Route::post('/category', [CategorieController::class, 'store'])->name('category.store');
Route::get('/category/create', [CategorieController::class, 'create'])->name('category.create');
Route::get('/category/{category}', [CategorieController::class, 'show'])->name('category.show');
Route::put('/category/{category}', [CategorieController::class, 'update'])->name('category.update');
Route::delete('/category/{category}', [CategorieController::class, 'destroy'])->name('category.destroy');
Route::get('/category/{category}/edit', [CategorieController::class, 'edit'])->name('category.edit');


//product route
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
