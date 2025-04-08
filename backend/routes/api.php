<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Middleware\HandleCors;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// ✅ Публічний маршрут у групі з CORS middleware
Route::middleware([HandleCors::class])->group(function () {
    Route::get('ping', function () {
        return response()->json(['message' => 'pong']);
    });
});
