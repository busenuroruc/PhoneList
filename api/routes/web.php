<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.index');
    
});

Route::post('/', function () {
    return view('pages.index');
});


Route::get('/blog', [BlogController::class, 'index']);
Route::get('/contact/create', [ContactController::class, 'create']);
Route::post('/contact/create', [ContactController::class, 'store']);
Route::post('/contact/update/{id}', [ContactController::class, 'update']);




