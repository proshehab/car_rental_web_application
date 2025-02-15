<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
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
    Route::get('/book-a-car', 'bookCar')->name('bookCarPage');
    Route::get('/contact', 'contact')->name('contactPage');
    // Route::get('/blog', 'blog')->name('blog.page');
    // Route::get('/blog-post/{id}', 'blog_post')->name('blog_post');
});

// Customer Route

Route::group(['prefix' => 'account'],function(){
    Route::group(['middleware' => 'guest'],function(){
        Route::get('login', [AuthController::class, 'index'])->name('account.login');
        Route::get('register', [AuthController::class, 'register'])->name('accoutnRegister');
        Route::post('progressRegister', [AuthController::class, 'progressRegister'])->name('account.progressRegister');
        Route::post('authenicate', [AuthController::class, 'authenicate'])->name('account.authenicate');
    });

    Route::group(['middleware' => 'auth'],function(){
        Route::get('logout', [AuthController::class, 'logout'])->name('account.logout');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('account.dashboard');
    });
});


// Admin Route

Route::group(['prefix' => 'admin'],function(){
    Route::group(['middleware' => 'admin.guest'],function(){
        Route::get('login', [LoginController::class, 'index'])->name('admin.login');
        Route::post('authenicate', [LoginController::class, 'authenicate'])->name('admin.authenicate');
    });

    Route::group(['middleware' => 'admin.auth'],function(){
        Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('manage-cars', [CarController::class, 'index'])->name('admin.manage-cars');
        Route::get('manage-cars/add', [CarController::class, 'add'])->name('admin.manage-cars.add');
        Route::get('manage-cars/edit/{id}', [CarController::class, 'edit'])->name('admin.manage-cars.edit');
        Route::post('manage-cars/edit/{id}', [CarController::class, 'update'])->name('admin.manage-cars.update');
        Route::get('manage-cars/delete/{id}', [CarController::class, 'destroy'])->name('admin.manage-cars.delete');
        Route::post('storeCar', [CarController::class, 'storeCar'])->name('admin.manage-cars.storeCar');
        Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
    });
});

// Route::post('/register', [AuthController::class, 'register'])->name('accoutnRegister');




// Route::middleware(['auth'])->group(function () {
//     Route::get('booking', [RentalController::class, 'index'])->middleware('customer');
//     Route::get('booking-history', [RentalController::class, 'history'])->middleware('customer');

//     Route::prefix('admin')->middleware('admin')->group(function () {
//         Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
//         Route::resource('cars', CarController::class);
//     });
// });