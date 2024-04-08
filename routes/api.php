<?php

use App\Http\Controllers\ApiKeyController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', fn() => now());

Route::post('/auth/register', [AuthController::class, 'createUser']);

Route::post('/auth/login', [AuthController::class, 'login']);

Route::get('/apikey/exists/{apikey}', [ApiKeyController::class, 'checkIfApiKeyExists']);

