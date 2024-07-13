<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\DepartmentController;
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

Route::get('/phone', function () {
    return view('client.phone');
})->name('page.phone');

Route::get('/tablet', function () {
    return view('client.tablet');
})->name('page.tablet');

Route::get('/laptop', function () {
    return view('client.laptop');
})->name('page.laptop');

Route::get('/tv-and-display', function () {
    return view('client.tv-and-display');
})->name('page.tv-and-display');

Route::get('/accessory', function () {
    return view('client.accessory');
})->name('page.accessory');

Route::get('/about', function () {
    return view('client.about');
})->name('page.about');

Route::get('/post', function () {
    $posts = DB::table('posts')->get();
    return view('client.post', compact('posts'));
})->name('page.post');

Route::get('/cart', function () {
    return view('client.cart');
})->name('page.cart');

Route::prefix('/department')->group(function () {
    Route::get('/', [DepartmentController::class, 'index'])->name('category.index');
});
