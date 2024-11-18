<?php

use App\Http\Controllers\VehiculoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::apiResource('/vehiculos', VehiculoController::class);

Route::get('/vehiculos',[VehiculoController::class, 'index']);
Route::post('/vehiculos',[VehiculoController::class, 'store']);
Route::get('/vehiculos/{id}',[VehiculoController::class, 'show']);
Route::put('/vehiculos/{id}',[VehiculoController::class, 'update']);
Route::delete('/vehiculos/{id}',[VehiculoController::class, 'destroy']);