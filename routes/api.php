<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::post('auth/login', [Controllers\Api\AuthController::class, 'login']);
Route::get('/users', [Controllers\Api\UserController::class, 'index']);
