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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
