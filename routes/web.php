<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // return view('frontend.layouts.app');
});




// Auth::routes();
Auth::routes();

Route::group(['middleware' => 'PreventBackHistory'], function () {
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function () {

    // Admin Dashboard
    // Route::get('/', [\App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'admin'])->name('admin.dashboard');

    // Banner Section
    Route::resource('/banner', 'BannerController');
    // All User List
    Route::get('user', [AdminController::class, 'userList'])->name('userList');
    // All Vender List
    Route::get('vender', [AdminController::class, 'venderList'])->name('venderList');
    // All category
    // Main
    Route::get('main-category', [AdminController::class, 'mainCategory'])->name('mainCategory');
    // Sub
    Route::get('sub-category', [AdminController::class, 'subCategory'])->name('subCategory');
});



// customer Routes

Route::group(['prefix' => 'customer', 'middleware' => ['isCustomer', 'auth', 'PreventBackHistory']], function () {

 // Customer Dashboard
 Route::get('/', [\App\Http\Controllers\CustomerController::class, 'customer'])->name('customer.dashboard');

});



// Venders Routes

Route::group(['prefix' => 'venders', 'middleware' => ['isVender', 'auth', 'PreventBackHistory']], function () {

 // Vender Dashboard
 Route::get('/', [\App\Http\Controllers\VenderController::class, 'venders'])->name('vender.dashboard');

});
