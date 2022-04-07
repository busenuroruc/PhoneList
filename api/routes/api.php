<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('api')->post('/contact/new', [ContactController::class, 'store']);
// Route::middleware('api')->post('/contact/update/{id}', [ContactController::class, 'update'])->name("api");
// Route::middleware('api')->get('/contacts', [ContactController::class, 'index']);
// Route::middleware('api')->delete('/contact/delete/{id}', [ContactController::class, 'destroy']);

Route::prefix('user')->group(function () {
    Route::get('/detail/{id}', [UserController::class, 'detail']);
    Route::get('/list/{rowCount?}/{page?}/{orderBy?}/{search?}', [UserController::class, 'list']);
    Route::post('/list', [UserController::class, 'list']);
    Route::post('/new', [UserController::class, 'store']);
    Route::put('/update/{id?}', [UserController::class, 'update']);
//    Route::delete('/delete', [UserController::class, 'destroy']);
});

Route::prefix('user-detail')->group(function () {
    Route::get('/{id}', [UserController::class, 'user']);
    Route::get('/list', [UserController::class, 'list']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/list/{rowCount}/{page}/{sortBy}', [UserController::class, 'list']);
    Route::post('/new', [UserController::class, 'store']);
    Route::put('/update', [UserController::class, 'update']);
    Route::delete('/delete', [UserController::class, 'destroy']);
//    Route::delete('/delete', [UserController::class, 'destroy']);
});

Route::prefix('company-detail')->group(function () {
    Route::get('/{id}', [UserController::class, 'user']);
    Route::get('/list', [UserController::class, 'list']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/list/{rowCount}/{page}/{sortBy}', [UserController::class, 'list']);
    Route::post('/new', [UserController::class, 'store']);
    Route::put('/update', [UserController::class, 'update']);
    Route::delete('/delete', [UserController::class, 'destroy']);
});

Route::prefix('address')->group(function () {
     Route::get('/{id}', [UserController::class, 'user']);
    Route::get('/list', [UserController::class, 'list']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/list/{rowCount}/{page}/{sortBy}', [UserController::class, 'list']);
    Route::post('/new', [UserController::class, 'store']);
    Route::put('/update', [UserController::class, 'update']);
    Route::delete('/delete', [UserController::class, 'destroy']);
});

Route::prefix('contact')->group(function () {
    Route::get('/{id}', [UserController::class, 'user']);
    Route::get('/list', [UserController::class, 'list']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/list/{rowCount}/{page}/{sortBy}', [UserController::class, 'list']);
    Route::post('/new', [UserController::class, 'store']);
    Route::put('/update', [UserController::class, 'update']);
    Route::delete('/delete', [UserController::class, 'destroy']);
});

Route::prefix('job')->group(function () {
    Route::get('/{id}', [UserController::class, 'user']);
    Route::get('/list', [UserController::class, 'list']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/list/{rowCount}/{page}/{sortBy}', [UserController::class, 'list']);
    Route::post('/new', [UserController::class, 'store']);
    Route::put('/update', [UserController::class, 'update']);
    Route::delete('/delete', [UserController::class, 'destroy']);
});

Route::prefix('defination')->group(function () {
    Route::get('/{id}', [UserController::class, 'user']);
    Route::get('/list', [UserController::class, 'list']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/list/{rowCount}/{page}/{sortBy}', [UserController::class, 'list']);
    Route::post('/new', [UserController::class, 'store']);
    Route::put('/update', [UserController::class, 'update']);
    Route::delete('/delete', [UserController::class, 'destroy']);
});
