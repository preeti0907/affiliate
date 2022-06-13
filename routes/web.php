<?php

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


Route::get('/', [App\Http\Controllers\Website\HomeController::class, 'index']);

Auth::routes();

Route::get('/admin-backend', [App\Http\Controllers\Admin\HomeController::class, 'index']);

// category
Route::get('/admin-backend/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category.index');
Route::get('/admin-backend/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.category.create');
Route::get('/admin-backend/category/edit/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.category.edit');
Route::post('/admin-backend/category/update', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.category.update');
Route::post('/admin-backend/category/save', [App\Http\Controllers\Admin\CategoryController::class, 'save'])->name('admin.category.save');

// article
Route::get('/admin-backend/article', [App\Http\Controllers\Admin\ArticleController::class, 'index'])->name('admin.article.index');
Route::get('/admin-backend/article/create', [App\Http\Controllers\Admin\ArticleController::class, 'create'])->name('admin.article.create');
Route::get('/admin-backend/article/edit/{article_id}', [App\Http\Controllers\Admin\ArticleController::class, 'edit'])->name('admin.article.edit');
Route::post('/admin-backend/article/update', [App\Http\Controllers\Admin\ArticleController::class, 'update'])->name('admin.article.update');
Route::post('/admin-backend/article/save', [App\Http\Controllers\Admin\ArticleController::class, 'save'])->name('admin.article.save');


// product
Route::get('/admin-backend/product/{article_id?}', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.product.index');
Route::get('/admin-backend/product/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin.product.create');
Route::get('/admin-backend/product/edit/{product_id}', [App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin.product.edit');
Route::post('/admin-backend/product/update', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin.product.update');
Route::post('/admin-backend/product/save', [App\Http\Controllers\Admin\ProductController::class, 'save'])->name('admin.product.save');


// process
Route::get('category/{category_id}', [App\Http\Controllers\Website\ProcessController::class, 'category'])->name('website.category');
Route::get('article/{article_id}', [App\Http\Controllers\Website\ProcessController::class, 'article'])->name('website.article');

