<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlateController as PlateController;
use App\Http\Controllers\OrderController as OrderController;
<<<<<<< HEAD
use App\Http\Controllers\BraintreeController;
=======
use App\Http\Controllers\RestaurantController as RestaurantController;
>>>>>>> ramo-login
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ----------   PLATE'S ROUTES -------- //
Route::middleware('auth')->group( function() {
    Route::resource('/plates', PlateController::class);
});

Route::get('orders', [OrderController::class, 'index'])->name('orders.index');

<<<<<<< HEAD
Route::any('/payment', [BraintreeController::class, 'token'])->name('token')->middleware('auth');
=======
//---Restaurants routes---//
Route::middleware('auth')->group( function() {
    Route::resource('/restaurants', RestaurantController::class);
});

>>>>>>> ramo-login
