<?php

use App\Http\Controllers\studentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/students',[studentController::class,'index']);
Route::post('/students',[studentController::class, 'store']);
Route::get('/students/{id}',[studentController::class,'show']);
Route::delete('/students/{id}',[studentController::class,'destroy']);
Route::put('/students/{id}',[studentController::class,'update']);

