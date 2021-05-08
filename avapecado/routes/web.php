<?php

use App\Http\Controllers\ElementController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\ProductController;
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

//navigate to home page
Route::get('/',[NavigationController::class, 'home'])->name('index');
//navigates dynamically to available pages
Route::get('{route}',[NavigationController::class, 'index']);
// element routes
Route::post('create-element',[ElementController::class,'store']);
Route::post('delete-element',[ElementController::class,'delete']);
// image routes
Route::post('create-image',[ImageController::class,'store']);
Route::post('delete-image',[ImageController::class,'delete']);
// gallery routes
Route::post('create-gallery',[GalleryController::class,'store']);
Route::post('delete-gallery',[GalleryController::class,'delete']);
// user routes
Route::post('create-user',[UserController::class,'store']);
Route::post('delete-user',[UserController::class,'delete']);
// Product routes
Route::post('create-product',[ProductController::class,'store']);
Route::post('delete-product',[ProductController::class,'delete']);
