<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LiveSearchController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QualityController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
Route::get('/register', [LoginController::class, 'register'])->name('admin.layout.register');
Route::post('/register', [LoginController::class, 'postRegister']);
Route::get('/search', [LiveSearchController::class, 'index']);
Route::get('/searchInfo', [LiveSearchController::class, 'search']);
Route::get('/result', [LiveSearchController::class, 'search'])->name('guest.resultSearch');
Route::get('/{id}/profile', [UserController::class, 'showProfile'])->name('guest.profile');
Route::get('/{id}/editProfile', [ProfileController::class, 'edit'])->name('user.editProfile');
Route::post('/{id}/editProfile', [ProfileController::class, 'update'])->name('user.updateProfile');
Route::get('/listMovie', [MovieController::class, 'listMovie'])->name('guest.listMovie');

Route::prefix('/')->group(function () {
    Route::get('/', [IndexController::class, 'showIndex'])->name('view.index');
    Route::get('/{id}/detail', [IndexController::class, 'showDetail'])->name('view.detail');
    Route::post('/comment',[\App\Http\Controllers\CommentController::class,'storeComment'])->name('store.comment');
});

Route::middleware('auth')->prefix('admin')->group(function () {
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
    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/add', [UserController::class, 'create'])->name('user.create');
        Route::post('/add', [UserController::class, 'store'])->name('user.store');
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/{id}/edit', [UserController::class, 'update'])->name('user.update');
        Route::get('/{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy');
    });
    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/add', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/add', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/{id}/edit', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/{id}/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');
    });
    Route::prefix('language')->group(function () {
        Route::get('/', [LanguageController::class, 'index'])->name('language.index');
        Route::get('/add', [LanguageController::class, 'create'])->name('language.create');
        Route::post('/add', [LanguageController::class, 'store'])->name('language.store');
        Route::get('/{id}/edit', [LanguageController::class, 'edit'])->name('language.edit');
        Route::post('/{id}/edit', [LanguageController::class, 'update'])->name('language.update');
        Route::get('/{id}/destroy', [LanguageController::class, 'destroy'])->name('language.destroy');
    });
    Route::prefix('quality')->group(function () {
        Route::get('/', [QualityController::class, 'index'])->name('quality.index');
        Route::get('/add', [QualityController::class, 'create'])->name('quality.create');
        Route::post('/add', [QualityController::class, 'store'])->name('quality.store');
        Route::get('/{id}/edit', [QualityController::class, 'edit'])->name('quality.edit');
        Route::post('/{id}/edit', [QualityController::class, 'update'])->name('quality.update');
        Route::get('/{id}/destroy', [QualityController::class, 'destroy'])->name('quality.destroy');

    });
    Route::prefix('role')->group(function () {
        Route::get('/', [RoleController::class, 'index'])->name('role.index');
        Route::get('/add', [RoleController::class, 'create'])->name('role.create');
        Route::post('/add', [RoleController::class, 'store'])->name('role.store');
        Route::get('/{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
        Route::post('/{id}/edit', [RoleController::class, 'update'])->name('role.update');
        Route::get('/{id}/destroy', [RoleController::class, 'destroy'])->name('role.destroy');
    });

    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/add', [UserController::class, 'create'])->name('user.create');
        Route::post('/add', [UserController::class, 'store'])->name('user.store');
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/{id}/edit', [UserController::class, 'update'])->name('user.update');
        Route::get('/{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy');
    });
});
