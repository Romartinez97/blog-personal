<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'getIndex']);
Route::get('auth/login', [LoginController::class, 'getIndex']);
Route::get('logout', [LogoutController::class, 'getIndex']);
Route::get('category', [CategoryController::class, 'getIndex']);
Route::get('category/show/{id}', [CategoryController::class, 'getShow']);
Route::get('category/create', [CategoryController::class, 'getCreate']);
Route::get('category/edit/{id}', [CategoryController::class, 'getEdit']);
Route::resource('posts', PostController::class);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');