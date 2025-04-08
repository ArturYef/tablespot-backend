<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// ✅ Публічний маршрут — відповідає на запит /api/ping JSON-повідомленням
Route::get('/ping', function () {
    return response()->json(['message' => 'pong']);
});