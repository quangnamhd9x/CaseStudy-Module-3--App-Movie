<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('/', [IndexController::class, 'showIndex'])->name('view.index');
    Route::get('/{id}/detail', [IndexController::class, 'showDetail'])->name('view.detail');
//    Route::post('/movie/{id}/detail', [IndexController::class, 'detail'])->name('view.detail');
});

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');

Route::get('/register', [LoginController::class, 'register'])->name('admin.layout.register');
Route::post('/register', [LoginController::class, 'postRegister']);

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'showDashboard'])->name('admin.dashboard');
    Route::prefix('movies')->group(function () {
        Route::get('/add', [MovieController::class, 'create'])->name('movie.create');
        Route::post('/add', [MovieController::class, 'store'])->name('movie.store');
        Route::get('/', [MovieController::class, 'showList'])->name('movie.list');
        Route::get('/{id}/edit', [MovieController::class, 'edit'])->name('movie.edit');
        Route::post('/{id}/edit', [MovieController::class, 'update'])->name('movie.update');
        Route::get('/{id}/destroy', [MovieController::class, 'destroy'])->name('movie.destroy');
        Route::get('/{id}/detail', [MovieController::class, 'showDetail'])->name('movie.showDetail');
    });
});
