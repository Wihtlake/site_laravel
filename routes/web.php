<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/find', [HomeController::class, 'find'])->name('find');

Route::get('/catalog', [ProductController::class, 'catalog'])->name('catalog');
Route::get('/catalog/{product}', [ProductController::class, 'show'])->name('catalog.show');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [loginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [loginController::class, 'store'])->middleware('guest');
Route::get('/logout', [loginController::class, 'destroy'])->middleware('auth')->name('logout');

// Корзина
Route::get('/basket', [CartController::class, 'index'])->middleware('auth')->name('basket.index');
Route::post('/basket/add/{id}', [CartController::class, 'add'])->middleware('auth')->name('basket.add');
Route::delete('/basket/{id}', [CartController::class, 'destroy'])->middleware('auth')->name('basket.destroy');



Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('admin');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create')->middleware('admin');
Route::get('/admin/Products', [AdminController::class, 'products'])->name('admin.products')->middleware('admin');
Route::get('/admin/Users', [AdminController::class, 'users'])->name('admin.users')->middleware('admin');
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store')->middleware('admin');
Route::get('/admin/Products/{Product}/edit', [AdminController::class, 'edit'])->name('admin.edit')->middleware('admin');
Route::put('/admin/Products/{Product}', [AdminController::class, 'update'])->name('admin.update')->middleware('admin');
Route::delete('/admin/Products/{Product}', [AdminController::class, 'destroy'])->name('admin.delete')->middleware('admin');






