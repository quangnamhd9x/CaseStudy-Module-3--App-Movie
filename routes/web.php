<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'showIndex'])->name('view.index');

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');

Route::get('/register', [LoginController::class, 'register'])->name('admin.layout.register');
Route::post('/register', [LoginController::class, 'postRegister']);

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'showDashboard'])->name('admin.dashboard');
    Route::prefix('movies')->group(function(){
        Route::get('/add', [\App\Http\Controllers\MovieController::class, 'create'])->name('movie.create');
        Route::post('/add', [\App\Http\Controllers\MovieController::class, 'store'])->name('movie.store');
        Route::get('/', [\App\Http\Controllers\MovieController::class, 'showList'])->name('movie.list');
        Route::get('/{id}/edit', [\App\Http\Controllers\MovieController::class, 'edit'])->name('movie.edit');
        Route::post('/{id}/edit', [\App\Http\Controllers\MovieController::class, 'update'])->name('movie.update');
        Route::get('/{id}/destroy', [\App\Http\Controllers\MovieController::class, 'destroy'])->name('movie.destroy');
        Route::get('/{id}/detail', [\App\Http\Controllers\MovieController::class, 'showDetail'])->name('movie.showDetail');
    });
});
