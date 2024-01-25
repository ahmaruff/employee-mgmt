<?php

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

// HOME
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function() {
    // AUTH
    Route::get('/login', [\App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'create'])->name('admin.login');
    Route::post('/login', [\App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'store'])->name('admin.auth');
    Route::get('/register', [\App\Http\Controllers\Admin\Auth\RegisteredUserController::class, 'create'])->name('admin.register');
    Route::post('/register', [\App\Http\Controllers\Admin\Auth\RegisteredUserController::class, 'store'])->name('admin.post-register');

    // ADMIN
    Route::middleware('auth:admin')->group(function () {
        Route::post('logout', [\App\Http\Controllers\Admin\Auth\AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
        Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.dashboard');
    });
});
