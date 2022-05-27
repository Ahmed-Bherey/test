<?php

use App\Http\Controllers\admin\BriefController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\UserController;
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

Route::middleware('auth')->prefix("admin")->group(function(){
    Route::get('/' , [DashboardController::class , 'index'])->name('Dashboard');
    Route::resource('users' , UserController::class);
    Route::resource('roles' , RoleController::class);
    Route::resource('categories' , CategoryController::class);
    Route::resource('products' , ProductController::class);
    Route::resource('prief' , BriefController::class);
});
