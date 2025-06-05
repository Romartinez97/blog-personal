<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\EditController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

Route::get('/', [HomeController::class, 'getIndex']);
Route::get('auth/login', [LoginController::class, 'getIndex']);
Route::get('logout', [LogoutController::class, 'getIndex']);
Route::get('category', [CategoryController::class, 'getIndex']);
Route::get('category/show/{id}', [CategoryController::class, 'getShow']);
Route::get('category/create', [CategoryController::class, 'getCreate']);
Route::get('category/edit/{id}', [CategoryController::class, 'getEdit']);