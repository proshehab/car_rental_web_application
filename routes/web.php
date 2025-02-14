<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RentalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Frontend\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });

//Frontend routs
// Route::get('/',[PageController::class,'index'])->name('PageFront');

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('homePage');
    Route::get('/about', 'about')->name('aboutPage');
    Route::get('/rentals', 'rentals')->name('rentalsPage');
    Route::get('/contact', 'contact')->name('contactPage');
    // Route::get('/blog', 'blog')->name('blog.page');
    // Route::get('/blog-post/{id}', 'blog_post')->name('blog_post');
});


Route::get('/account/login', [AuthController::class, 'index'])->name('account.login');
Route::post('/account/authenicate', [AuthController::class, 'authenicate'])->name('account.authenicate');
Route::get('/accoutn/register', [AuthController::class, 'register'])->name('accoutnRegister');
// Route::post('/register', [AuthController::class, 'register'])->name('accoutnRegister');

Route::post('/progressRegister', [AuthController::class, 'progressRegister'])->name('account.progressRegister');
Route::get('/account/dashboard', [DashboardController::class, 'index'])->name('account.dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::get('booking', [RentalController::class, 'index'])->middleware('customer');
//     Route::get('booking-history', [RentalController::class, 'history'])->middleware('customer');

//     Route::prefix('admin')->middleware('admin')->group(function () {
//         Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
//         Route::resource('cars', CarController::class);
//     });
// });