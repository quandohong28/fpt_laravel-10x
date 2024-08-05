<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HastagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [ClientController::class, 'home'])->name('page.home');
Route::get('/post/{slug}', [ClientController::class, 'postDetail'])->name('page.post-detail');
Route::get('/search', [ClientController::class, 'search'])->name('page.search');

Route::group([
    'middleware' => 'auth',
], function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('page.profile.index');
    Route::put('/profile', [ProfileController::class, 'update'])->name('page.profile.update');
    Route::get('/profile/changePassword', [ProfileController::class, 'changePassword'])->name('page.profile.changePassword');
    Route::put('/profile/changePassword', [ProfileController::class, 'postChangePassword'])->name('page.profile.postChangePassword');
});

Route::group([
    'prefix' => 'auth',
], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('auth.post.login');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/register', [AuthController::class, 'postRegister'])->name('auth.post.register');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/forgot-password', [AuthController::class, 'sendMail'])->name('auth.get.forgot-password');
});

Route::group([
    'prefix' => 'admin',
    'middleware' => 'admin',
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resource('/users', UserController::class)->names([
        'index' => 'admin.users.index',
        'create' => 'admin.users.create',
        'store' => 'admin.users.store',
        'show' => 'admin.users.show',
        'edit' => 'admin.users.edit',
        'update' => 'admin.users.update',
        'destroy' => 'admin.users.destroy',
    ]);

    Route::resource('/posts', PostController::class)->names([
        'index' => 'admin.posts.index',
        'create' => 'admin.posts.create',
        'store' => 'admin.posts.store',
        'show' => 'admin.posts.show',
        'edit' => 'admin.posts.edit',
        'update' => 'admin.posts.update',
        'destroy' => 'admin.posts.destroy',
    ]);

    Route::resource('/categories', CategoryController::class)->names([
        'index' => 'admin.categories.index',
        'create' => 'admin.categories.create',
        'store' => 'admin.categories.store',
        'show' => 'admin.categories.show',
        'edit' => 'admin.categories.edit',
        'update' => 'admin.categories.update',
        'destroy' => 'admin.categories.destroy',
    ]);

    Route::resource('/hastags', HastagController::class)->names([
        'index' => 'admin.hastags.index',
        'create' => 'admin.hastags.create',
        'store' => 'admin.hastags.store',
        'show' => 'admin.hastags.show',
        'edit' => 'admin.hastags.edit',
        'update' => 'admin.hastags.update',
        'destroy' => 'admin.hastags.destroy',
    ]);
});
