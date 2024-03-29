<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\DriverOrderController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
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
Route::get('/driver/login', [LoginController::class, 'loginDriver'])->name('driver.login');
Route::post('/driver/login/store', [LoginController::class, 'loginDriverStore'])->name('driver.login.store');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('register');
});

Route::middleware(['auth'])->group(function () {

    Route::prefix('driver')->middleware('role:5')->group(function () {
        Route::get('/', [DriverController::class, 'index'])->name('driver');
        Route::post('/store', [DriverController::class, 'store'])->name('driver.store');
        Route::get('/edit/{id}', [DriverController::class, 'edit'])->name('driver.edit');
        Route::put('/update/{id}', [DriverController::class, 'update'])->name('driver.update');
    });

    Route::prefix('employee')->middleware('role:5')->group(function () {
        Route::get('/', [EmployeeController::class, 'index'])->name('employee');
        Route::post('/store', [EmployeeController::class, 'store'])->name('employee.store');
        Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
        Route::put('/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
    });

    Route::get('/home',[ DashboardController::class, 'index'])->name('home');

    Route::prefix('branch')->middleware('role:5')->group(function () {
        Route::get('/', [BranchController::class, 'index'])->name('branch');
        Route::post('/store', [BranchController::class, 'store'])->name('branch.store');
        Route::get('/edit/{id}', [BranchController::class, 'edit'])->name('branch.edit');
        Route::put('/update/{id}', [BranchController::class, 'update'])->name('branch.update');
    });

    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile')->middleware('role:5');
    Route::get('/edit-profile',  [ProfileController::class, 'edit'])->name('profile.edit')->middleware('role:5');
    Route::put('/update/profile',  [ProfileController::class, 'update'])->name('profile.update')->middleware('role:5');

    Route::prefix('order')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('order');
        Route::post('/store', [OrderController::class, 'store'])->name('order.store');
        Route::get('/edit/{id}', [OrderController::class, 'edit'])->name('order.edit');
        Route::put('/update/{id}', [OrderController::class, 'update'])->name('order.update');
    });

    Route::get('/get-area', [BranchController::class, 'getArea'])->name('get.area');
    Route::get('/get-block', [BranchController::class, 'getABlock'])->name('get.block');

    Route::get('/order-history', [OrderController::class, 'history'])->name('order.history');
    Route::post('/assign-driver/{orderId}', [DriverOrderController::class, 'store'])->name('assign.driver');
    Route::post('/enroute-driver', [DriverOrderController::class, 'enroute'])->name('enroute.driver');
    Route::post('/complete-driver/{orderId}', [DriverOrderController::class, 'complete'])->name('complete.driver');
    Route::post('/cancel-driver/{orderId}', [DriverOrderController::class, 'cancel'])->name('cancel.driver');

    Route::get('/subscription', function () {
        return view('subscription');
    });

    Route::get('/invoice', function () {
        return view('invoice');
    });

    Route::get('/wallet', function () {
        return view('wallet');
    });

    Route::get('/branch-summery', function () {
        return view('branch-summery');
    });

    Route::get('/driver-order', function () {
        return view('driver-order');
    });

});
