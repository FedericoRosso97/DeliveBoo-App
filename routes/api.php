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

Route::get('/typologies', [ TypologyController::class, 'index' ])->name('api.typologies.index');

//<<<<<<< HEAD
Route::get('/restaurant', [ RestaurantController::class, 'index' ])->name('api.restaurants.index');
//=======
Route::get('/plates', [ ApiPlateController::class, 'index' ])->name('api.plates.index');

Route::get('/plates/{plate}', [  ApiPlateController::class, 'show' ])->name('api.plates.show');

// <<<<<<< HEAD
// <<<<<<< HEAD
// Route::post('/plates/create', [ ApiPlateController::class, 'store'])->name('api.plates.create');
// //>>>>>>> plate-crud
// =======

// >>>>>>> myOrders
// =======
// // <<<<<<< HEAD
// // Route::post('/plates/create', [ ApiPlateController::class, 'store'])->name('api.plates.create');
// // //>>>>>>> plate-crud
// // =======

// // >>>>>>> plate-crud
// >>>>>>> e6f09e79b3fd34660babea12c215bd03b80a1f69
