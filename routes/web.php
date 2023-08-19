<?php

use App\Http\Controllers\cart\IndexController;
use App\Http\Controllers\cart\RemoveProductFromCart;
use App\Http\Controllers\cart\UpdateProductInCart;
use App\Http\Controllers\cart\CreateProductInCartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', StartController::class)->name("start");
Route::get('/catalog', CatalogController::class)->name("catalog");
Route::get("/catalog/{Category}",CategoryController::class)->name("products");
Route::get("catalog/{Category}/{EngName}_{id}", ProductController::class)->name("product");
Route::get("/profile", ProfileController::class)->name("profile");

Route::get("/cart", IndexController::class)->name("cart");
Route::get("/add", CreateProductInCartController::class)->name("createProduct");
Route::get("/update", UpdateProductInCart::class)->name("updateProduct");
Route::get("/remove", RemoveProductFromCart::class)->name("removeProduct");
Route::get("/adm", [\App\Http\Controllers\AdminController::class, "index"])->name("admin")->middleware(\App\Http\Middleware\IsAdmin::class);
Route::post("/addProduct", [\App\Http\Controllers\AdminController::class, "AddProduct"])->name("addProduct")->middleware(\App\Http\Middleware\IsAdmin::class);
Route::post("/adm/addProductImage", [\App\Http\Controllers\AdminController::class, "AddProductImage"])->name("addProductImage")->middleware(\App\Http\Middleware\IsAdmin::class);
Route::post("/adm/addType", [\App\Http\Controllers\AdminController::class, "AddProductType"])->name("addProductType")->middleware(\App\Http\Middleware\IsAdmin::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
