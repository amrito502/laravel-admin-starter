<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[AuthController::class,'login']);


Route::post('/',[AuthController::class,'authLogin'])->name('auth.login');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');


Route::group(['middleware' => 'useradmin'], function(){
    Route::get('/panel/dashboard',[DashboardController::class,'dashboard'])->name('panel.dashboard');
    Route::get('/panel/role',[RoleController::class,'list'])->name('role.list');
    Route::get('/panel/role/add',[RoleController::class,'add'])->name('role.add');
    Route::post('/panel/role/add',[RoleController::class,'insert'])->name('role.insert');
    Route::get('/panel/role/edit/{id}',[RoleController::class,'edit'])->name('role.edit');
    Route::post('/panel/role/edit/{id}',[RoleController::class,'update'])->name('role.update');
    Route::get('/panel/role/delete/{id}',[RoleController::class,'delete'])->name('role.delete');


    Route::get('/panel/user',[UserController::class,'list'])->name('user.list');
    Route::get('/panel/user/add',[UserController::class,'add'])->name('user.add');
    Route::post('/panel/user/add',[UserController::class,'insert'])->name('user.insert');
    Route::get('/panel/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::post('/panel/user/edit/{id}',[UserController::class,'update'])->name('user.update');
    Route::get('/panel/user/delete/{id}',[UserController::class,'delete'])->name('user.delete');

});




//