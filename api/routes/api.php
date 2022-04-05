<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->post('/contact/new', [ContactController::class, 'store']);
Route::middleware('api')->post('/contact/update/{id}', [ContactController::class, 'update'])->name("api");
Route::middleware('api')->get('/contacts', [ContactController::class, 'index']);
Route::middleware('api')->delete('/contact/delete/{id}', [ContactController::class, 'destroy']);
