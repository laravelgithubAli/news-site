<?php

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

Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);


Route::get('/brands/create',[\App\Http\Controllers\BrandController::class,'create']);
Route::post('/brands',[\App\Http\Controllers\BrandController::class,'store']);

Route::get('/categories',[\App\Http\Controllers\CategoryController::class,'index']);
Route::get('/categories/create',[\App\Http\Controllers\CategoryController::class,'create']);
Route::post('/categories',[\App\Http\Controllers\CategoryController::class,'store']);
Route::get('/categories/{category}/edit',[\App\Http\Controllers\CategoryController::class,'edit']);
Route::patch('/categories/{category}',[\App\Http\Controllers\CategoryController::class,'update']);

