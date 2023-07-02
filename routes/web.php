<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
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

Route::get('/', function () {
    return view('welcome');
});
// web.php

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/', [HomeController::class,'index'])->name('index');
    
    // users routes
    Route::get('user/',[UserController::class,'index'])->name('user.index');
    Route::get('user/create',[UserController::class,'create'])->name('user.create');
    Route::post('user/store',[UserController::class,'store'])->name('user.store');
    Route::get('user/show/{id}',[UserController::class,'show'])->name('user.show');
    Route::get('user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::post('user/update/{id}',[UserController::class,'update'])->name('user.update');
    Route::post('user/destroy/{id}',[UserController::class,'destroy'])->name('user.destroy');
    
    // permissions routes
    Route::get('permission/',[PermissionController::class,'index'])->name('permission.index');
    Route::get('permission/create',[PermissionController::class,'create'])->name('permission.create');
    Route::post('permission/store',[PermissionController::class,'store'])->name('permission.store');
    Route::get('permission/show/{id}',[PermissionController::class,'show'])->name('permission.show');
    Route::get('permission/edit/{id}',[PermissionController::class,'edit'])->name('permission.edit');
    Route::post('permission/update/{id}',[PermissionController::class,'update'])->name('permission.update');
    Route::post('permission/destroy/{id}',[PermissionController::class,'destroy'])->name('permission.destroy');
    
    // roles routes
    Route::get('role/',[RoleController::class,'index'])->name('role.index');
    Route::get('role/create',[RoleController::class,'create'])->name('role.create');
    Route::post('role/store',[RoleController::class,'store'])->name('role.store');
    Route::get('role/show/{id}',[RoleController::class,'show'])->name('role.show');
    Route::get('role/edit/{id}',[RoleController::class,'edit'])->name('role.edit');
    Route::post('role/update/{id}',[RoleController::class,'update'])->name('role.update');
    Route::post('role/destroy/{id}',[RoleController::class,'destroy'])->name('role.destroy');
});