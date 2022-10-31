<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FridgeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CameraController;
use App\Http\Controllers\Admin\PointSaleController;
use App\Http\Controllers\Admin\TicketsController;
use App\Http\Controllers\Admin\ProductionsController;

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
// dd(Route::get('admin', [HomeController::class, 'index'])->name('index')); 
use App\Http\Controllers\Admin\RoleController;
Route::resource('admin', AdminController::class)->only('index');
Route::resource('users', UserController::class) ->names('admin.users');
Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::resource('fridges', FridgeController::class)->names('admin.fridges');
Route::resource('products', ProductController::class)->names('admin.products');
Route::resource('cameras', CameraController::class)->names('admin.cameras');
Route::resource('pointsales', PointSaleController::class)->names('admin.pointsales');
//Route::resource('chats', ChatsController::class)->names('admin.chats');
Route::resource('posts', PostController::class)->names('admin.posts');
Route::resource('tickets', TicketsController::class)->names('admin.tickets');
Route::resource('productions', ProductionsController::class)->names('admin.productions');