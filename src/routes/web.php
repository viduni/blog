<?php

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

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('App\Http\Controllers')
    ->group(function(){
        Auth::routes();
    })
;

Route::get('/home', HomeController::class . '@index')->name('home');
Route::get('/posts/create', PostsController::class . '@create')
    ->name('posts.create')
;
Route::post('/posts/store', PostsController::class . '@store')
    ->name('posts.store')
;

Route::get('/posts', PostsController::class . '@index')
    ->name('posts.index')
;

Route::get('/posts/{id}', PostsController::class . '@edit')
    ->name('posts.edit')
;

Route::patch('/posts/{id}', PostsController::class . '@update')
    ->name('posts.update')
;

Route::get('/categories/create',CategoriesController::class . '@create')
    ->name('categories.create')
;

Route::post('/categories/store',CategoriesController::class . '@store')
    ->name('categories.store')
;

Route::get('/categories', CategoriesController::class . '@index')
    ->name('categories.index')
;

Route::get('/categories/{id}', CategoriesController::class . '@edit')
    ->name('categories.edit')
;

Route::patch('/categories/{id}', CategoriesController::class . '@update')
    ->name('categories.update')
;