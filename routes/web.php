<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard admin
Route::middleware('auth')->controller(DashboardAdminController::class)->group(function() {
    Route::get('/dashboard', 'index')->name('dashboard');
});

// Category
Route::middleware('auth')->controller(CategoryController::class)->group(function() {
    Route::get('/categories', 'index')->name('categories');
    Route::post('/categories/store', 'store')->name('categories.store');
    Route::put('/categories/update/{id}', 'update')->name('categories.update');
    Route::delete('/categories/destroy/{id}', 'destroy')->name('categories.destroy');
});

// Book
Route::middleware('auth')->controller(BookController::class)->group(function() {
    Route::get('/book/index', 'index')->name('book.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
