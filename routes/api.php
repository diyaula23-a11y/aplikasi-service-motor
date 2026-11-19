<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ServiceMotorApiController;

// Endpoint Pelanggan
Route::get('/pelanggan', [ServiceMotorApiController::class, 'getPelanggan']);
Route::get('/pelanggan/{id}', [ServiceMotorApiController::class, 'showPelanggan']);
Route::post('/pelanggan', [ServiceMotorApiController::class, 'storePelanggan']);

// Endpoint Kendaraan
Route::get('/kendaraan', [ServiceMotorApiController::class, 'getKendaraan']);
Route::post('/kendaraan', [ServiceMotorApiController::class, 'storeKendaraan']);

// Endpoint Daftar Service
Route::get('/daftar-service', [ServiceMotorApiController::class, 'getDaftarService']);
Route::get('/daftar-service/{id}', [ServiceMotorApiController::class, 'showDaftarService']);
Route::post('/daftar-service', [ServiceMotorApiController::class, 'storeDaftarService']);

// Endpoint Data Service
Route::get('/data-service', [ServiceMotorApiController::class, 'getDataService']);
Route::post('/data-service', [ServiceMotorApiController::class, 'storeDataService']);

// Endpoint Pembayaran
Route::get('/pembayaran', [ServiceMotorApiController::class, 'getPembayaran']);
Route::post('/pembayaran', [ServiceMotorApiController::class, 'storePembayaran']);
