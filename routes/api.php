<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Login API
Route::post('/login', [AuthController::class, 'login']);
// Route::post('/login', [AuthController::class, 'login'])->withoutMiddleware('auth');


// Logout API
Route::post('/logout', [AuthController::class, 'logout']);

