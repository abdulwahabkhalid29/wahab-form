<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthorUpdateController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('blog/details/{id}', [IndexController::class, 'details'])->name('blog/details');

Route::get('admin',[AdminController::class,'admin'])->name('admin.dashboard');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//category
Route::get('categories' , [CategoryController::class , 'category'])->name('categories.category');
Route::get('categories/create' , [CategoryController::class , 'create'])->name('categories.create');
Route::post('categories/store' , [CategoryController::class , 'store'])->name('categories.store');
Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('categories/{id}/update', [CategoryController::class, 'update'])->name('categories.update');
Route::get('categories/{id}/delete', [CategoryController::class, 'delete'])->name('categories.delete');


//reader
Route::get('reader' , [ReaderController::class , 'index'])->name('reader.index');

//author
Route::get('authors' , [AuthorController::class , 'index'])->name('authors.index');
Route::get('authorupdate' , [AuthorController::class , 'update'])->name('authorupdate.index');

//Blog
Route::get('blogs' , [BlogController::class , 'index'])->name('blogs.index');
Route::get('create', [BlogController::class , 'create'])->name('blogs.create');
Route::post('store', [BlogController::class , 'store'])->name('blogs.store');
Route::get('blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::post('blogs/{id}/update', [BlogController::class, 'update'])->name('blogs.update');
Route::get('blogs/{id}/delete', [BlogController::class, 'delete'])->name('blogs.delete');
