<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('page.home');

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
});
