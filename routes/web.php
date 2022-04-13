<?php

use App\Http\Controllers\PostsController;
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


Route::get('/login', function (){
    return view('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::get('/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');

Route::get('/{post}/edit', [App\Http\Controllers\HomeController::class, 'edit']);
Route::put('/home/{post}', [App\Http\Controllers\HomeController::class, 'update']);

Route::get('/{post}/delete', [App\Http\Controllers\HomeController::class,'delete']);
Route::delete('/home/{post}', [App\Http\Controllers\HomeController::class, 'destroy']);

//below I build the core of the app and then added the login, delete, etc
//Route::get('/posts', [PostsController::class, 'index']);
//Route::post('/posts', [PostsController::class, 'store']);
//Route::get('/posts/create', [PostsController::class, 'create']);


