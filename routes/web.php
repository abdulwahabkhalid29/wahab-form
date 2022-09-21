<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\AuthorController;

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

Route::get('admin',[AdminController::class,'admin'])->name('admin.dashboard');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('categories' , [CategoryController::class , 'category'])->name('categories.category');
Route::get('categories/create' , [CategoryController::class , 'create'])->name('categories.create');
Route::post('categories/store' , [CategoryController::class , 'store'])->name('categories.store');
Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('categories/{id}/update', [CategoryController::class, 'update'])->name('categories.update');
Route::get('categories/{id}/delete', [CategoryController::class, 'delete'])->name('categories.delete');

Route::get('reader' , [ReaderController::class , 'index'])->name('reader.index');
Route::get('authors' , [AuthorController::class , 'index'])->name('authors.index');
