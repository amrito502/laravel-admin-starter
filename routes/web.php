<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
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

});




//