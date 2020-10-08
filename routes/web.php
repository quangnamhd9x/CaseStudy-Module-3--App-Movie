<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/admin', function () {
//    return view('admin.layout.dashboard');
//});
//Route::get('/', function (){
//   return view()
//});
Route::get('/', [\App\Http\Controllers\IndexController::class, 'showIndex'])->name('view.index');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'showLogin'])->name('layout.login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('layout.login');

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'showDashboard'])->name('admin.layout.dashboard');

Route::get('register', [\App\Http\Controllers\LoginController::class, 'register'])->name('admin.layout.register');
Route::post('register', [\App\Http\Controllers\LoginController::class, 'postRegister']);
