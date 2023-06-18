<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LocationController;

Auth::routes();

Route::get('/', [App\Http\Controllers\User\UserDashboardController::class, 'homePage']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\User\UserDashboardController::class, 'about']);
Route::get('/contact-us', [App\Http\Controllers\User\BooksController::class, 'contact']);
Route::get('/book', [App\Http\Controllers\User\BooksController::class, 'books']);
Route::get('/book/detail/{id}', [App\Http\Controllers\User\BooksController::class, 'detail']);
Route::get('location', [App\Http\Controllers\User\LocationController::class, 'list']);
Route::get('location/{id}', [App\Http\Controllers\User\LocationController::class, 'index']);
Route::get('category', [App\Http\Controllers\User\CategoryController::class, 'list']);
Route::get('category/{id}', [App\Http\Controllers\User\CategoryController::class, 'index']);
Route::post('message', [App\Http\Controllers\User\MessageController::class, 'store']);
Route::post('search', [App\Http\Controllers\User\UserDashboardController::class, 'search']);

Route::group([ "as"=>'user.' , "prefix"=>'user' , "namespace"=>'User' , "middleware"=>['auth','user']],function(){
    Route::get('/dashboard', [App\Http\Controllers\User\UserDashboardController::class, 'index'])->name('dashboard');

    Route::get('/book/create', [App\Http\Controllers\User\BooksController::class, 'create']);
    Route::get('/book/index', [App\Http\Controllers\User\BooksController::class, 'index']);
    Route::post('/book/store', [App\Http\Controllers\User\BooksController::class, 'store']);

    //cart
    Route::get('/cart/{id}', [App\Http\Controllers\User\CartController::class, 'store']);
    Route::get('/cart-detail', [App\Http\Controllers\User\CartController::class, 'cart_details']);
    Route::post('cart/quantity-store/{id}', [App\Http\Controllers\User\CartController::class, 'quantity']);
    Route::get('cart/delete/{id}', [App\Http\Controllers\User\CartController::class, 'destroy']);
    //checkout
    Route::post('checkout/store', [App\Http\Controllers\User\CheckoutController::class, 'store']);
    //order
    Route::get('order', [App\Http\Controllers\User\OrderController::class, 'index']);
    //logout
    Route::get('logout', [App\Http\Controllers\User\UserDashboardController::class, 'logout']);
});
 
/* ADMIN */
Route::group([ "as"=>'admin.' , "prefix"=>'admin' , "middleware"=>['auth','admin']],function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('dashboard');
    /* category */
    Route::resource('/category', CategoryController::class);

    /* location */
    Route::resource('/location', LocationController::class);

    /* author */
    Route::resource('/author', LocationController::class);
     
    /* book */
    Route::resource('/book', BookController::class);
    Route::get('/book/status/{id}', [App\Http\Controllers\Admin\BookController::class, 'status']);
    Route::get('/user-post', [App\Http\Controllers\Admin\BookController::class, 'pending'])->name('user-post');

    //order
    Route::get('order/orders', [App\Http\Controllers\Admin\OrderController::class, 'index']);
    Route::get('order/status/{id}', [App\Http\Controllers\Admin\OrderController::class, 'status']);
    Route::get('order/delete/{id}', [App\Http\Controllers\Admin\OrderController::class, 'destroy']);
    Route::get('order/detail/{id}', [App\Http\Controllers\Admin\OrderController::class, 'detail']);
    Route::post('order/porduct-quantiy/{id}', [App\Http\Controllers\Admin\OrderController::class, 'quantity']);
    Route::post('order/cart-delete/{id}', [App\Http\Controllers\Admin\OrderController::class, 'delete']);

    //message
    // Route::get('message/messages', [App\Http\Controllers\Admin\MessageController::class, 'index']);
    Route::get('message/status/{id}', [App\Http\Controllers\Admin\MessageController::class, 'status']);
    // Route::get('message/delete/{id}', [App\Http\Controllers\Admin\MessageController::class, 'delete']);

    Route::resource('message', 'App\Http\Controllers\Admin\MessageController', [
        'only' => ['index', 'destroy']
    ]);

    //logout
    Route::get('logout', [App\Http\Controllers\Admin\AdminDashboardController::class, 'logout']);

});




