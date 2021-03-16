<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;

Route::get('', [AdminController::class, 'index'])->Middleware('can:admin.index')->name('admin.index');
Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');
Route::resource('tags', TagController::class)->except('show')->names('admin.tags');
Route::resource('posts', PostController::class)->except('show')->names('admin.posts');
Route::resource('users', UserController::class)->only('index', 'edit', 'update')->names('admin.users');
