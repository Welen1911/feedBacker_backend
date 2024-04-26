<?php

use App\Http\Controllers\ApiKeyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', fn() => now());

Route::post('/auth/register', [AuthController::class, 'createUser']);

Route::post('/auth/login', [AuthController::class, 'login']);

Route::get('/apikey/exists/{apikey}', [ApiKeyController::class, 'checkIfApiKeyExists']);

Route::get('/users/me', [UserController::class, 'me'])->middleware('auth:sanctum');

Route::post('/users/me/apikey', [UserController::class, 'apikey'])->middleware('auth:sanctum');

Route::get('/feedbacks/summary', [FeedbackController::class, 'summary'])->middleware('auth:sanctum');

Route::get('/feedbacks', [FeedbackController::class, 'index'])->middleware('auth:sanctum');

Route::post('/feedbacks', [FeedbackController::class, 'store']);
