<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/addprofile', [WebController::class, 'addprofile']);

Route::get('/register', 'App\Http\Controllers\RegistrationController@create');
Route::post('register', 'App\Http\Controllers\RegistrationController@store');

Route::resource('product_types', 'App\Http\Controllers\ProductTypeController');
Route::resource('products', 'App\Http\Controllers\ProductController');
Route::post('/products/{id}', [ProductController::class, 'update']);
Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
