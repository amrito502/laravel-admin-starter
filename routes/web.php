<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[AuthController::class,'login']);

Route::get('/panel-dashboard',[DashboardController::class,'dashboard'])->name('panel.dashboard');

Route::post('/auth-login',[AuthController::class,'authLogin'])->name('auth.login');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');