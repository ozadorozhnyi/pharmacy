<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActiveSubstanceController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\MedicineController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('active_substances', ActiveSubstanceController::class)->only(['index']);
Route::resource('manufacturers', ManufacturerController::class)->only(['index']);
Route::resource('medicines', MedicineController::class)->except([
    'create', 'edit'
]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
