<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [LoginController::class, 'index'])->name('log');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('register');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/driver', function () {
        return view('driver');
    });

    Route::prefix('employee')->group(function () {
        Route::get('/', [EmployeeController::class, 'index'])->name('employee');
        Route::post('/store', [EmployeeController::class, 'store'])->name('employee.store');
        Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
        Route::put('/update/{id}',[EmployeeController::class, 'update'])->name('employee.update');

    });

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/branch', function () {
        return view('branch');
    });

    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

    Route::get('/subscription', function () {
        return view('subscription');
    });

    Route::get('/invoice', function () {
        return view('invoice');
    });

    Route::get('/wallet', function () {
        return view('wallet');
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
});
