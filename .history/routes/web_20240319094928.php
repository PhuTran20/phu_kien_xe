<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\UserController;
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
    Route::get('/', [ContactController::class, 'index'])->name('contact');
});
Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog');
});
Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product');
});
Route::prefix('shopping-cart')->group(function () {
    Route::get('/', [ShoppingCartController::class, 'index'])->name('shopping-cart');
});
Route::prefix('user')->group(function () {
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::get('/register', [UserController::class, 'register'])->name('register');
});

//admin
Route::prefix('admin')->group( function (){
    //login-admin
    Route::get("/",[AdminController::class,'pageLogin'])->name("login");
    
    Route::post(('/home'),[AdminController::class,'login'])->name('admin_login');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin_logout');
    //home-admin
    Route::get("/home",[AdminController::class,'pageHome']);
});