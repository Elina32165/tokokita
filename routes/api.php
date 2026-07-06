<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProdukApiController;
use App\Http\Controllers\Api\AuthApiController;

// Rute Publik: Siapapun bisa akses form login untuk minta Token
Route::post('/login', [AuthApiController::class, 'login']);

// Rute Terproteksi: WAJIB menyertakan Token
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/produk', [ProdukApiController::class, 'index']);
});
