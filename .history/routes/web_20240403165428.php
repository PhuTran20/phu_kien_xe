<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProdController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Category_Prod;
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
//show-product
Route::get('/',[ProductController::class,"showProductAll"])->name("All-Product");
Route::get("/product/{id_product}",[ProductController::class,"showProductDetail"]);
Route::get("/category/{id_category}",[ProductController::class,"showProductCategory"]);
Route::get("/categoryProd/{id_cate_product}",[ProductController::class],"showProductCate")

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
    Route::get('/login', [UserController::class, 'viewLogin'])->name('login-view');
    Route::get('/register', [UserController::class, 'viewRegister'])->name('register-view');
    Route::post('/register', [UserController::class, 'register'])->name('register-user');
    Route::post('/login', [UserController::class, 'login'])->name('login-user');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout-user');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout-user');
    Route::get('/', [UserController::class, 'viewUser'])->name('user-view');
    Route::put('/{id_user}', [UserController::class, 'infoUser'])->name('info-user');
});

//admin
Route::prefix('admin')->group( function (){
    //login-admin
    Route::get("/",[AdminController::class,'pageLogin'])->name("login");
    
    Route::post(('/home'),[AdminController::class,'login'])->name('admin-login');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin-logout');
    //home-admin
    Route::get("/home",[AdminController::class,'pageHome'])->name("admin-home");
    //category
    Route::get("/category",[CategoryController::class,"viewIndex"])->name("admin-category");
    Route::get("/category/create",[CategoryController::class,"viewCreate"])->name("admin-create-category");
    Route::post("/category/store",[CategoryController::class,"storeCategory"])->name("admin-store-category");
    Route::get("/category/edit/{id_category}",[CategoryController::class,"viewEdit"])->name("admin-edit-category");
    Route::put("/category/update/{id_category}",[CategoryController::class,"updateCategory"])->name("admin-update-category");
    Route::delete("/category/delete/{id_category}",[CategoryController::class,"destroyCategory"]);
    //category-product
    Route::get("/category_Prod",[CategoryProdController::class,"viewIndex"])->name("admin-category-Prod");
    Route::get("/category_Prod/create",[CategoryProdController::class,"viewCreate"])->name("admin-create-categoryProd");
    Route::post("/category_Prod/store",[CategoryProdController::class,"storeCategoryProd"])->name("admin-store-categoryProd");
    Route::get("/category_Prod/edit/{id_cate_product}",[CategoryProdController::class,"viewEdit"]);
    Route::put("/category_Prod/update/{id_cate_product}",[CategoryProdController::class,"updateCategoryProd"]);
    Route::delete("/category_Prod/delete/{id_cate_product}",[CategoryProdController::class,"destroyCategoryProd"]);
    //product
    Route::get("/product",[ProductController::class,"viewIndex"])->name("admin-product");
    Route::get("/product/create",[ProductController::class,"viewCreate"])->name("admin-create-product");
    Route::get('getProductsByCategory', [ProductController::class, 'getProductsByCategory'])->name('getProductsByCategory');
    Route::post("/product/store",[ProductController::class,"storeProduct"])->name("admin-store-product");
    Route::get("/product/edit/{id_product}",[ProductController::class,"viewEdit"]);
    Route::put("/product/update/{id_product}",[ProductController::class,"updateProduct"]);
    Route::delete("/product/delete/{id_product}",[ProductController::class,"destroyProduct"]);
    //bike
    Route::get("/bike",[BikeController::class,"viewIndex"])->name("admin-bike");
    Route::get("/bike/create",[BikeController::class,"viewCreate"])->name("admin-create-bike");
    Route::post("/bike/store",[BikeController::class,"storebike"])->name("admin-store-bike");
    Route::get("/bike/edit/{id_bike}",[BikeController::class,"viewEdit"]);
    Route::put("/bike/update/{id_bike}",[BikeController::class,"updatebike"]);
    Route::delete("/bike/delete/{id_bike}",[BikeController::class,"destroybike"]);
    //account-admin
    
    Route::get("/account",[AdminController::class,"viewIndex"])->name("admin-account");
    Route::get("/account/create",[AdminController::class,"viewCreate"])->name("admin-create-account");
    Route::post("/account/store",[AdminController::class,"storeAccount"])->name("admin-store-account");
    Route::get("/account/edit/{id_admin}",[AdminController::class,"viewEdit"]);
    Route::put("/account/update/{id_admin}",[AdminController::class,"updateAccount"]);
    Route::delete("/account/delete/{id_admin}",[AdminController::class,"destroyAccount"]);
   
    
});