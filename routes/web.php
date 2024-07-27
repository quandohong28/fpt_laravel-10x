<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
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
    return view('client.home');
})->name('page.home');

Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


    Route::get('/genre', [GenreController::class, 'index'])->name('genre.index');
    Route::get('/genre/create', [GenreController::class, 'create'])->name('genre.create');
    Route::post('/genre', [GenreController::class, 'store'])->name('genre.store');
    Route::get('/genre/{genre}', [GenreController::class, 'show'])->name('genre.show');
    Route::get('/genre/{genre}/edit', [GenreController::class, 'edit'])->name('genre.edit');
    Route::put('/genre/{genre}', [GenreController::class, 'update'])->name('genre.update');
    Route::delete('/genre/{genre}', [GenreController::class, 'destroy'])->name('genre.destroy');

    Route::get('/movie', [MovieController::class, 'index'])->name('movie.index');
    Route::get('/movie/create', [MovieController::class, 'create'])->name('movie.create');
    Route::post('/movie', [MovieController::class, 'store'])->name('movie.store');
    Route::get('/movie/{movie}', [MovieController::class, 'show'])->name('movie.show');
    Route::get('/movie/{movie}/edit', [MovieController::class, 'edit'])->name('movie.edit');
    Route::put('/movie/{movie}', [MovieController::class, 'update'])->name('movie.update');
    Route::delete('/movie/{movie}', [MovieController::class, 'destroy'])->name('movie.destroy');
});
