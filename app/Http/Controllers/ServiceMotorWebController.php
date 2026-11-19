<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Kendaraan;
use App\Models\DaftarService;
use App\Models\DataService;
use App\Models\Pembayaran;

class ServiceMotorWebController extends Controller
{
    public function index(Request $request)
    {
        return view('service_motor', [
            'menu'           => $request->query('menu', 1),
            'pelanggans'     => Pelanggan::all(),
            'kendaraans'     => Kendaraan::all(),
            'daftarServices' => DaftarService::all(),
            'dataServices'   => DataService::all(),
            'pembayarans'    => Pembayaran::all(),
        ]);
    }

    public function storePelanggan(Request $request)
    {
        Pelanggan::create($request->all());
        return redirect('/?menu=1')->with('success', 'Data Pelanggan berhasil disimpan!');
    }

    public function storeKendaraan(Request $request)
    {
        Kendaraan::create($request->all());
        return redirect('/?menu=2')->with('success', 'Data Kendaraan berhasil disimpan!');
    }

    public function storeDaftarService(Request $request)
    {
        DaftarService::create($request->all());
        return redirect('/?menu=3')->with('success', 'Daftar Service berhasil disimpan!');
    }

    public function storeDataService(Request $request)
    {
        DataService::create($request->all());
        return redirect('/?menu=4')->with('success', 'Data Service berhasil disimpan!');
    }

    public function storePembayaran(Request $request)
    {
        Pembayaran::create($request->all());
        return redirect('/?menu=5')->with('success', 'Pembayaran Service berhasil disimpan!');
    }
}
