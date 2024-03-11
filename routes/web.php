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
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/driver', function () {
    return view('driver');
});

Route::get('/employee', function () {
    return view('employee');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/branch', function () {
    return view('branch');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/subscription', function () {
    return view('subscription');
});

Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/wallet', function () {
    return view('wallet');
});

Route::get('/edit-employee', function () {
    return view('edit-employee');
});

Route::get('/edit-profile', function () {
    return view('edit-profile');
});

Route::get('/branch-summery', function () {
    return view('branch-summery');
});

Route::get('/driver-order', function () {
    return view('driver-order');
});

Route::get('/form-page', function () {
    return view('form-page');
});

Route::get('/order-history', function () {
    return view('order-history');
});
