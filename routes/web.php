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
    Route::get('/book-a-car', 'bookCar')->name('bookCarPage');
    Route::get('/contact', 'contact')->name('contactPage');
    // Route::get('/blog', 'blog')->name('blog.page');
    // Route::get('/blog-post/{id}', 'blog_post')->name('blog_post');
});



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





// Route::post('/register', [AuthController::class, 'register'])->name('accoutnRegister');




// Route::middleware(['auth'])->group(function () {
//     Route::get('booking', [RentalController::class, 'index'])->middleware('customer');
//     Route::get('booking-history', [RentalController::class, 'history'])->middleware('customer');

//     Route::prefix('admin')->middleware('admin')->group(function () {
//         Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
//         Route::resource('cars', CarController::class);
//     });
// });