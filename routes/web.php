<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceMotorWebController;

Route::get('/', [ServiceMotorWebController::class, 'index']);
Route::post('/pelanggan', [ServiceMotorWebController::class, 'storePelanggan'])->name('pelanggan.store');
Route::post('/kendaraan', [ServiceMotorWebController::class, 'storeKendaraan'])->name('kendaraan.store');
Route::post('/daftar-service', [ServiceMotorWebController::class, 'storeDaftarService'])->name('daftar-service.store');
Route::post('/data-service', [ServiceMotorWebController::class, 'storeDataService'])->name('data-service.store');
Route::post('/pembayaran', [ServiceMotorWebController::class, 'storePembayaran'])->name('pembayaran.store');
