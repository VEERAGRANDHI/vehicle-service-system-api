<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\VehiclesController;
use App\Http\Controllers\ServiceAppointmentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// get current user details
Route::get('/users/{id}', [AuthController::class, 'users']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);


// Implement vehicle routes

Route::get('/vehicles', [VehiclesController::class, 'index']);
Route::get('/vehicles/{id}', [VehiclesController::class, 'show']);
Route::post('/vehicles', [VehiclesController::class, 'store']);
Route::put('/vehicles/{id}', [VehiclesController::class, 'update']);
Route::delete('/vehicles/{id}', [VehiclesController::class, 'destroy']);
