<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,"index"]) ->name('home');
Route::prefix('about')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('about');
});
Route::prefix('contact')->group(function () {
    Route::get('/', [Conta::class, 'index'])->name('contact');
});
Route::prefix('blog')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('blog');
});
Route::prefix('product')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('product');
});
Route::prefix('shopping-cart')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('shopping-cart');
});


