<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//<<<<<<< HEAD
use App\Http\Controllers\Api\RestaurantController;
//=======
use App\Http\Controllers\Api\PlateController as ApiPlateController;
use App\Http\Controllers\Api\TypologyController;

//>>>>>>> plate-crud

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route per tipologie di ristorante, se spacca qualcosa sorry (Ema)
Route::get('/typology', [ TypologyController::class, 'index' ])->name('api.typology.index');

//<<<<<<< HEAD
Route::get('/restaurant', [ RestaurantController::class, 'index' ])->name('api.restaurants.index');
//=======
Route::get('/plates', [ ApiPlateController::class, 'index' ])->name('api.plates.index');

Route::get('/plates/{plate}', [  ApiPlateController::class, 'show' ])->name('api.plates.show');

Route::post('/plates/create', [ ApiPlateController::class, 'store'])->name('api.plates.create');
//>>>>>>> plate-crud
