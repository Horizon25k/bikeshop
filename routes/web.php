<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Api\ProductControllerApi;
use App\Http\Controllers\Api\CategoryControllerApi;
use App\Http\Controllers\CartController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index']);
Route::post('/product/search', [App\Http\Controllers\ProductController::class, 'search']);
Route::get('/product/edit/{id?}', [App\Http\Controllers\ProductController::class, 'edit']);
Route::post('/product/update', [App\Http\Controllers\ProductController::class, 'update']);
Route::post('/product/insert', [App\Http\Controllers\ProductController::class, 'insert']);
Route::get('/product/remove/{id}', [App\Http\Controllers\ProductController::class, 'remove']);

Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index']);
Route::post('/category/search', [App\Http\Controllers\CategoryController::class, 'search']);
Route::get('/category/edit/{id?}', [App\Http\Controllers\CategoryController::class, 'edit']);
Route::post('/category/update', [App\Http\Controllers\CategoryController::class, 'update']);
Route::post('/category/insert', [App\Http\Controllers\CategoryController::class, 'insert']);
Route::get('/category/remove/{id}', [App\Http\Controllers\CategoryController::class, 'remove']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/api/category', [App\Http\Controllers\Api\CategoryControllerApi::class, 'category_list']);
Route::get('/api/product/{category_id?}', [App\Http\Controllers\Api\ProductControllerApi::class, 'product_list']);
Route::post('api/product/search', [App\Http\Controllers\Api\ProductControllerApi::class, 'product_search']);

Route::get('/cart/view', [App\Http\Controllers\CartController::class, 'viewCart']);
Route::get('/cart/add/{id}', [App\Http\Controllers\CartController::class, 'addToCart']);
Route::get('/cart/delete/{id}', [App\Http\Controllers\CartController::class, 'deleteCart']);
Route::get('/cart/update/{id}/{qty}', [App\Http\Controllers\CartController::class, 'updateCart']);

Route::get('/', function () {
    return view('layouts.master');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
