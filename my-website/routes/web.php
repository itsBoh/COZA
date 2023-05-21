<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/index', function(){
    return view('index');
});
Route::get('account-password', function(){
    return view('account-password');
});
Route::get('account-profile', function(){
    return view('account-profile');
});
Route::get('account-transaction', function(){
    return view('account-transaction');
});
Route::get('contact', function(){
    return view('contact');
});
Route::get('Forgot-Password', function(){
    return view('Forgot-Password');
});
Route::get('home', function(){
    return view('home');
});
Route::get('product-detail', function(){
    return view('product-detail');
});
Route::get('product', function(){
    return view('product');
});
Route::get('Registrasi', function(){
    return view('Registrasi');
});
Route::get('shoping-cart', function(){
    return view('shoping-cart');
});
Route::get('wishlist', function(){
    return view('wishlist');
});
Route::get('shopping-checkout', function(){
    return view('shopping-checkout');
});
Route::get('Terms-of-Service', function(){
    return view('Terms-of-Service');
});