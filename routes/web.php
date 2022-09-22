<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BlogController;
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


Route::get('blogs' , [BlogController::class , 'index'])->name('blogs.index');
Route::get('blogs/create' , [BlogController::class , 'create'])->name('blogs.create');
Route::post('blogs/store' , [BlogController::class , 'store'])->name('blogs.store');
Route::get('blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::post('blogs/{id}/update', [BlogController::class, 'update'])->name('blogs.update');
Route::get('blogs/{id}/delete', [BlogController::class, 'delete'])->name('blogs.delete');

Route::get('reader' , [ReaderController::class , 'index'])->name('reader.index');
Route::get('authors' , [AuthorController::class , 'index'])->name('authors.index');
