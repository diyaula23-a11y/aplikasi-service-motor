<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Kendaraan;
use App\Models\DaftarService;
use App\Models\DataService;
use App\Models\Pembayaran;

class ServiceMotorApiController extends Controller
{
    // 1. API PELANGGAN
    public function getPelanggan() {
        return response()->json(['status' => true, 'data' => Pelanggan::all()]);
    }
    public function showPelanggan($id) {
        $data = Pelanggan::find($id);
        return response()->json(['status' => (bool)$data, 'data' => $data]);
    }
    public function storePelanggan(Request $request) {
        $data = Pelanggan::create($request->all());
        return response()->json(['status' => true, 'message' => 'Data pelanggan disimpan', 'data' => $data], 201);
    }

    // 2. API KENDARAAN
    public function getKendaraan() {
        return response()->json(['status' => true, 'data' => Kendaraan::all()]);
    }
    public function storeKendaraan(Request $request) {
        $data = Kendaraan::create($request->all());
        return response()->json(['status' => true, 'message' => 'Data kendaraan disimpan', 'data' => $data], 201);
    }

    // 3. API DAFTAR SERVICE
    public function getDaftarService() {
        return response()->json(['status' => true, 'data' => DaftarService::all()]);
    }
    public function showDaftarService($id) {
        $data = DaftarService::find($id);
        return response()->json(['status' => (bool)$data, 'data' => $data]);
    }
    public function storeDaftarService(Request $request) {
        $data = DaftarService::create($request->all());
        return response()->json(['status' => true, 'message' => 'Daftar service disimpan', 'data' => $data], 201);
    }

    // 4. API DATA SERVICE
    public function getDataService() {
        return response()->json(['status' => true, 'data' => DataService::all()]);
    }
    public function storeDataService(Request $request) {
        $data = DataService::create($request->all());
        return response()->json(['status' => true, 'message' => 'Data service disimpan', 'data' => $data], 201);
    }

    // 5. API PEMBAYARAN
    public function getPembayaran() {
        return response()->json(['status' => true, 'data' => Pembayaran::all()]);
    }
    public function storePembayaran(Request $request) {
        $data = Pembayaran::create($request->all());
        return response()->json(['status' => true, 'message' => 'Pembayaran disimpan', 'data' => $data], 201);
    }
}
