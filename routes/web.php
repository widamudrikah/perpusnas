<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(FrontController::class)->group(function() {
    Route::get('/','index')->name('welcome');
    Route::get('/detail/{id}','detail')->name('book.detail.front');
    Route::post('/borrow/{id}','borrow')->name('book.borrow.front');
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
    Route::get('/book/index', 'index')->name('admin.book.index');
    Route::get('/book/create', 'create')->name('admin.book.create');
    Route::post('/book/upload', 'upload')->name('admin.book.upload');
    Route::get('/book/detail/{id}', 'detail')->name('admin.book.detail');
    Route::get('/book/edit/{id}', 'edit')->name('admin.book.edit');
    Route::put('/book/update/{id}', 'update')->name('admin.book.update');
});

Route::middleware('auth')->controller(BorrowingController::class)->group(function() {
    Route::get('/borrowings', 'index')->name('admin.borrowings');
    Route::put('/borrowing/{id}/status', 'updateStatus')->name('admin.borrowing.update');
});
require __DIR__.'/auth.php';
