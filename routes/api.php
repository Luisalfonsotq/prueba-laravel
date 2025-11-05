<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiProductosController;
use App\Http\Controllers\UniversityController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('productos', ApiProductosController::class);

Route::get('/universities', [UniversityController::class, 'index']);