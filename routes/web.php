<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\EditController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

Route::get('/', [HomeController::class, 'index']);
Route::get('login', [LoginController::class,'index']);
Route::get('logout', [LogoutController::class,'index']);
Route::get('category', [CategoryController::class,'index']);
Route::get('category/show/{id}', [CategoryController::class, 'show']);
Route::get('create', [CreateController::class,'index']);
Route::get('edit/{id}', [EditController::class,'index']);