<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('/user/login',[AuthController::class,'postLogin'])->name('postLogin');
Route::get('/user/register',[AuthController::class,'register'])->name('register');
Route::post('/user/register',[AuthController::class,'postRegister'])->name('postRegister');
Route::get('/user/dashboard',[UserDashboardController::class,'dashboard'])->name('user.dashboard');