<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\FrontEndController;
use App\Models\Product;
use App\Models\Cart;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[App\Http\Controllers\FrontEnd\FrontEndController::class,'index'])->name('index');
Route::get('/index',[App\Http\Controllers\FrontEnd\FrontEndController::class,'index'])->name('index');
Route::get('/cart',[App\Http\Controllers\FrontEnd\FrontEndController::class,'cart'])->name('cart');
Route::get('/productView/{id}',[App\Http\Controllers\FrontEnd\FrontEndController::class,'productView'])->name('productView');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    // category controller
    Route::get('/category/create',[App\Http\Controllers\CategoryController::class,'create'])->name('category.create');
    Route::post('/category/create',[App\Http\Controllers\CategoryController::class,'store'])->name('category.store');
    Route::get('/categories',[App\Http\Controllers\CategoryController::class,'index'])->name('category.list');
    Route::get('/categories/edit/{id}',[App\Http\Controllers\CategoryController::class,'edit'])->name('category.edit');
    Route::post('/categories/edit/{id}',[App\Http\Controllers\CategoryController::class,'update'])->name('category.update');
    // Route::post('/categories/delete',[App\Http\Controllers\CategoryController::class,'destroy'])->name('category.delete');
    Route::delete('/categories/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.delete');


    // product contoller
    Route::get('/products',[App\Http\Controllers\ProductController::class,'index'])->name('product.list');
    Route::get('/product/create',[App\Http\Controllers\ProductController::class,'create'])->name('product.create');
    Route::post('/product/create',[App\Http\Controllers\ProductController::class,'store'])->name('product.store');
    Route::get('/product/edit/{id}',[App\Http\Controllers\ProductController::class,'edit'])->name('product.edit');
    Route::post('/product/edit/{id}',[App\Http\Controllers\ProductController::class,'update'])->name('product.update');
    Route::post('/product/delete/{id}',[App\Http\Controllers\ProductController::class,'destroy'])->name('product.delete');
    Route::get('/product/details/{id}',[App\Http\Controllers\ProductController::class,'extraDetails'])->name('product.extraDetails');
    Route::post('/product/details/{id}',[App\Http\Controllers\ProductController::class,'extraDetailsStore'])->name('product.extraDetailsStore');
        //cart
    Route::post('cart/store',[App\Http\Controllers\CartController::class,'store'])->name('cart.store');
    Route::get('cart/delete',[App\Http\Controllers\CartController::class,'destroy'])->name('cart.delete');
    Route::delete('/cart/{id}', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.delete');

    //productbooking
    Route::post('product/booking',[App\Http\Controllers\ProductBookingController::class,'store'])->name('product.booking');

    //boolingproducts

    Route::get('booking/products',[App\Http\Controllers\ProductBookingController::class,'index'])->name('booking.products');


});



