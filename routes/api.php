<?php

use App\Http\Controllers\VehiculoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Routes::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::apiResource('/vehiculos', VehiculoController::class);

Routes::get('/vehiculos',[VehiculoController::class, 'index']);
Routes::post('/vehiculos',[VehiculoController::class, 'store']);
Routes::get('/vehiculos/{id}',[VehiculoController::class, 'show']);
Routes::put('/vehiculos/{id}',[VehiculoController::class, 'update']);
Routes::delete('/vehiculos/{id}',[VehiculoController::class, 'destroy']);