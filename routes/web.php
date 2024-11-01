<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', [\App\Http\Controllers\PageController::class, 'products']);
Route::get('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');;
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/', [\App\Http\Controllers\PageController::class, 'posts']);
Route::get('/products', [\App\Http\Controllers\PageController::class, 'products']);
Route::get('/profile', [\App\Http\Controllers\PageController::class, 'show'])->middleware('auth');
Route::get('/support', [\App\Http\Controllers\PageController::class, 'support'])->middleware('auth');
Route::get('/about', [\App\Http\Controllers\PageController::class, 'about']);
Route::resource('products', ProductController::class);



Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profilee', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profilee', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profilee', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
