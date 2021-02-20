<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\AdminGoodController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
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

Route::get('/', [IndexController::class, 'show'])->name('home');

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::get('/register', [RegisterController::class, 'show']);



Route::post('/action/login', [LoginController::class, 'auth']);
Route::post('/register/action/save', [RegisterController::class, 'save']);


Route::get('/category', [IndexController::class, 'category'])->name('category');
Route::get('/product/detail', [IndexController::class, 'productDetail']);

Route::get('/cart', [CartController::class, 'show']);
Route::get('/checkout', [CartController::class, 'checkoutshow']);

Route::get('/user/order', [UserController::class, 'ordershow']);

Route::group(
[
    'prefix' => '/admin',
    // 'namespace' => 'admin',
    'middleware' => 'admin'
], function()
{
    Route::get('/', [AdminIndexController::class, 'show'])->middleware('auth');
    Route::get('/goods', [AdminGoodController::class, 'show'])->middleware('auth');
    Route::get('/goods/new', [AdminGoodController::class, 'new'])->middleware('auth');
    Route::post('/goods/new', [AdminGoodController::class, 'new'])->middleware('auth');
    Route::post('/goods/edit', [AdminGoodController::class, 'edit'])->middleware('auth');
    Route::get('/goods/edit/{id}', [AdminGoodController::class, 'edit'])->middleware('auth');
    Route::delete('/goods/{id}', [AdminGoodController::class, 'remove'])->middleware('auth');
    Route::post('/goods/editspec', [AdminGoodController::class, 'editspec'])->middleware('auth');
    Route::get('/goods/editspec/{id}', [AdminGoodController::class, 'editspec'])->middleware('auth');

    Route::get('/categories', [AdminCategoryController::class, 'show'])->middleware('auth');
    Route::get('/categories/new', [AdminCategoryController::class, 'new'])->middleware('auth');
    Route::post('/categories/new', [AdminCategoryController::class, 'new'])->middleware('auth');
    Route::post('/categories/edit', [AdminCategoryController::class, 'edit'])->middleware('auth');
    Route::get('/categories/edit/{id}', [AdminCategoryController::class, 'edit'])->middleware('auth');
    Route::delete('/categories/{id}', [AdminCategoryController::class, 'remove'])->middleware('auth');


    Route::get('/users', [AdminUserController::class, 'show'])->middleware('auth');
    Route::get('/users/new', [AdminUserController::class, 'new'])->middleware('auth');
    Route::post('/users/new', [AdminUserController::class, 'new'])->middleware('auth');
    Route::post('/users/edit', [AdminUserController::class, 'edit'])->middleware('auth');
    Route::get('/users/edit/{id}', [AdminUserController::class, 'edit'])->middleware('auth');

});