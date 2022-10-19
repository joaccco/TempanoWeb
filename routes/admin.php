<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FridgeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CameraController;
use App\Http\Controllers\Admin\PointSaleController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\Admin\PostController;

Route::get('', [HomeController::class, 'index'])->name('admin.home'); 

Route::resource('categories', CategoryController::class)->names('admin.categories'); 
Route::resource('fridges', FridgeController::class)->names('admin.fridges');
Route::resource('products', ProductController::class)->names('admin.products');
Route::resource('cameras', CameraController::class)->names('admin.cameras');
Route::resource('pointsales', PointSaleController::class)->names('admin.pointsales');
Route::resource('chats', ChatsController::class)->names('admin.chats');

Route::resource('posts', PostController::class)->names('admin.posts');
