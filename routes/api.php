<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::post('auth/login', [Controllers\Api\AuthController::class, 'login']);

Route::group(['middleware' => ['apiJwt']], function () {
    Route::post('/auth/logout', [Controllers\Api\AuthController::class, 'logout']);
    Route::get('/users', [Controllers\Api\UserController::class, 'index']);
});
