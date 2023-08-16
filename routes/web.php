<?php

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

Route::get('/', [\App\Http\Controllers\StartController::class, "index"])->name("start");
Route::get('/catalog', [\App\Http\Controllers\CatalogController::class, "index"])->name("catalog");
Route::get("/catalog/{Category}",[\App\Http\Controllers\CategoryController::class, "index"])->name("products");
Route::get("catalog/{Category}/{EngName}_{id}", [\App\Http\Controllers\ProductController::class, "index"])->name("product");
Route::get("/profile", [\App\Http\Controllers\ProfileController::class, "index"])->name("profile");
Route::get("/cart", [\App\Http\Controllers\CartController::class, "index"])->name("cart");
Route::get("/add", [\App\Http\Controllers\CartController::class, "createProductInCart"])->name("createProduct");
Route::get("/update", [\App\Http\Controllers\CartController::class, "updateProductInCart"])->name("updateProduct");
Route::get("/remove", [\App\Http\Controllers\CartController::class, "removeProductFromCart"])->name("removeProduct");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
