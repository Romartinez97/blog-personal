<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;

// Página principal
Route::get('/', [HomeController::class, 'getIndex'])->name('home');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');


// Rutas para categorías
Route::get('/category', [CategoryController::class, 'getIndex'])->name('category.index');
Route::get('/category/show/{id}', [CategoryController::class, 'getShow'])->name('category.show');

// Rutas protegidas
Route::middleware('auth')->group(function () {

    //Dashboard
    Route::get('/dashboard', [HomeController::class, 'getIndex'])->name('dashboard');

    //Categorías
    Route::get('/create', [CategoryController::class, 'getCreate'])->name('category.create');
    Route::get('/edit/{id}', [CategoryController::class, 'getEdit'])->name('category.edit');
    Route::put('/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    //Comentarios
    Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');

    //Perfil del usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas de autenticación generadas por Breeze
require __DIR__ . '/auth.php';
