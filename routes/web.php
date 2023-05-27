<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-login', [AuthController::class, 'login']);
Route::post('/login-check', [AuthController::class, 'check']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/category', [CategoryController::class, 'create'])->middleware('can:create-category');
Route::get('/all-category', [CategoryController::class, 'index']);

Route::get('/user', [UserController::class, 'show'])->middleware('can:create-users');
Route::post('/user-store', [UserController::class, 'store']);
Route::get('/logout',[UserController::class,'logout']);


