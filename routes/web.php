<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
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

Route::get('/', function () {
    return 'hello world';
});

Route::prefix('/admin')->group(function () {

    Route::get('categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('category-detail/{id}', [CategoryController::class, 'show'])->name('admin.category.show');
    Route::get('add-category', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('add-category', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('edit-category/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::post('edit-category/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::get('delete-category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

    Route::get('books', [BookController::class, 'index'])->name('admin.books.index');
    Route::get('book-detail/{id}', [BookController::class, 'show'])->name('admin.book.show');
    Route::get('add-book', [BookController::class, 'create'])->name('admin.book.create');
    Route::post('add-book', [BookController::class, 'store'])->name('admin.book.store');
    Route::get('edit-book/{id}', [BookController::class, 'edit'])->name('admin.book.edit');
    Route::post('edit-book/{id}', [BookController::class, 'update'])->name('admin.book.update');
    Route::get('delete-book/{id}', [BookController::class, 'destroy'])->name('admin.book.destroy');

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
})->middleware('auth');
