<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PlateController as ApiPlateController;

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

Route::get('/plates', [ ApiPlateController::class, 'index' ])->name('api.plates.index');

Route::get('/plates/{plate}', [  ApiPlateController::class, 'show' ])->name('api.plates.show');

Route::post('/plates/create', [ ApiPlateController::class, 'store'])->name('api.plates.create');
