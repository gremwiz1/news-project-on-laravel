<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\IndexController as AdminController;
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

Route::get('/', [IndexController::class, 'index'])->name('home');

//Route::get('/news/category/sport', [NewsController::class, 'index'])->name('news');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('one');

Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
Route::get('/categories/{id}', [CategoriesController::class, 'show'])->name('one');

Route::view('/about', 'about')->name('about');

Route::name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::get('/test1', [AdminController::class, 'test1'])->name('test1');
        Route::get('/test2', [AdminController::class, 'test2'])->name('test2');
    });


