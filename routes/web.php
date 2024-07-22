<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('client.home');

Route::get('/bai-viet', function () {
    return view('client.post.index');
});

Route::get('/ve-chung-toi', function () {
    return view('client.about-us');
});

Route::get('/cart', [CartController::class, 'index'])->name('client.cart');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/product/{productSlug}', [ProductController::class, 'show'])
    ->name('client.product-detail');

Route::get('/{categorySlug}/{childCategorySlug?}', [ProductController::class, 'index'])
    ->where('childCategorySlug', '[^/]+')
    ->name('client.products');
