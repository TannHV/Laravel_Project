<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;



Route::prefix('/')->group(
    function () {
        Route::get('', [HomeController::class, 'index'])->name('home');

        Route::get('home', [HomeController::class, 'index']);

        Route::get('shop', [HomeController::class, 'shop']);

        Route::get('about', [HomeController::class, 'about']);

        Route::get('login', [HomeController::class, 'login'])->name('login');

        Route::get('signup', [HomeController::class, 'signup']);

        Route::post('register', [UserController::class, 'register']);

        Route::post('login', [UserController::class, 'login']);

        Route::get('logout', [UserController::class, 'logout'])->name('logout');

        Route::post('/addtoCart/{id}', [UserController::class, 'addToCart'])->name('addToCart');


        Route::get('cart', [HomeController::class, 'cart'])->name('cart');

        Route::get('/cart/increase/{id}', [UserController::class, 'increase'])->name('cart.increase');
        Route::get('/cart/decrease/{id}', [UserController::class, 'decrease'])->name('cart.decrease');
        Route::post('/cart/remove/{id}', [UserController::class, 'removeProduct'])->name('cart.remove');


        Route::get('product/{slug}', [HomeController::class, 'show'])->name('show');

        Route::get('category/{category}', [HomeController::class, 'category'])->name('category');
    }
);
Route::prefix('/admin')->group(
    function () {
        Route::get('', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
        Route::get('/addProduct', [AdminController::class, 'addProduct'])->name('admin.addProduct');
        Route::post('/create', [AdminController::class, 'create'])->name('createProduct');
        Route::get('/product/{id}/edit', [AdminController::class, 'editProduct'])->name('admin.edit');
        Route::put('/product/{id}', [AdminController::class, 'updateProduct'])->name('admin.update');
        Route::get('/product/{id}/delete', [AdminController::class, 'deleteProduct'])->name('admin.delete');
    }
);
