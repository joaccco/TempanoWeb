<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;

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

// Barra de navegacion
Route::get('/origen', function(){
    return view('origen.index');
});
Route::get('/mapa', function (){
    return view('mapa.index', [
    ]);
});
Route::get('/productos', function (){
    return view('productos.index', [
    ]);
});

Route::get('/galery', function (){
    return view('galery.index', [
    ]);
});


//Directo desde el controlador POSTCONTROLLER 
/* Route::get('/posts', function (){
    return view('posts.index', [
    ]);
}); */

//Chats
Auth::routes();
Route::get('/chats', [App\Http\Controllers\ChatsController::class, 'index']);
Route::post('/messages', [App\Http\Controllers\ChatsController::class, 'sendMessage']);
Route::get('/messages', [App\Http\Controllers\ChatsController::class, 'fetchMessages']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Posts Vistas-User
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show'); /* Vista de Cada Post */

Route::get('category/{category}', /* Sera admin por-> */ [PostController::class, 'category'])->name('posts.category'); /* Vista de posts por categorias */

//Products
Route::get('/productos', [ProductController::class, 'index'])->name('productos.index');

Route::get('productos/{product}', [ProductController::class, 'show'])->name('productos.show'); /* Vista de Cada Post */

//Forms
Route::get('/client', [ClientController::class, 'index'])->name('client.index');
Route::get('/event', [EventController::class, 'index'])->name('event.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});