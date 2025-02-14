<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RentalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/account/login', [AuthController::class, 'index'])->name('account.login');

Route::post('/account/authenicate', [AuthController::class, 'authenicate'])->name('account.authenicate');
//Route::post('/register', [AuthController::class, 'register'])->name('accoutnRegister');
//Route::get('/register', [AuthController::class, 'register'])->name('accoutnRegister');
//Route::post('/progressRegister', [AuthController::class, 'progressRegister'])->name('account.progressRegister');
Route::get('/account/dashboard', [DashboardController::class, 'index'])->name('account.dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::get('booking', [RentalController::class, 'index'])->middleware('customer');
//     Route::get('booking-history', [RentalController::class, 'history'])->middleware('customer');

//     Route::prefix('admin')->middleware('admin')->group(function () {
//         Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
//         Route::resource('cars', CarController::class);
//     });
// });
