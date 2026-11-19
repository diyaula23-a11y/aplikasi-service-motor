<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>MOTO-PRO | Sistem Terintegrasi Service Motor</title>
<style>
  * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif; }
  body { background: #f1f5f9; color: #334155; display: flex; min-height: 100vh; }
  .sidebar { width: 260px; background: #0f172a; color: #fff; padding: 24px 16px; position: fixed; height: 100vh; }
  .brand { font-size: 20px; font-weight: 800; color: #38bdf8; padding-bottom: 20px; border-bottom: 1px solid #334155; margin-bottom: 20px; }
  .brand span { display: block; font-size: 11px; color: #94a3b8; font-weight: 400; margin-top: 4px; }
  .nav-link { display: block; color: #cbd5e1; text-decoration: none; padding: 13px 16px; border-radius: 10px; font-size: 14px; font-weight: 600; margin-bottom: 8px; }
  .nav-link:hover, .nav-link.active { background: #2563eb; color: #fff; }
  .main { margin-left: 260px; flex: 1; padding: 28px 36px; }
  .topbar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; }
  .badge-api { background: #dcfce7; color: #166534; padding: 6px 14px; border-radius: 20px; font-size: 12px; font-weight: 700; }
  .stats { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-bottom: 24px; }
  .stat-card { background: #fff; padding: 18px; border-radius: 12px; border: 1px solid #e2e8f0; }
  .stat-card small { color: #64748b; font-size: 11px; font-weight: 700; text-transform: uppercase; }
  .stat-card h3 { font-size: 24px; color: #0f172a; margin-top: 4px; }
  .card { background: #fff; border-radius: 14px; padding: 24px; border: 1px solid #e2e8f0; margin-bottom: 24px; }
  .card-title { font-size: 17px; font-weight: 700; color: #0f172a; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 1px solid #e2e8f0; }
  .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
  .form-group { display: flex; flex-direction: column; }
  label { font-size: 13px; font-weight: 600; margin-bottom: 6px; }
  input, select, textarea { padding: 10px 14px; border: 1.5px solid #cbd5e1; border-radius: 8px; font-size: 14px; }
  input[readonly] { background: #f8fafc; font-weight: 700; border-style: dashed; }
  .radio-group { display: flex; gap: 16px; padding-top: 6px; }
  .btn { background: #2563eb; color: #fff; border: none; padding: 12px 24px; border-radius: 8px; font-weight: 700; cursor: pointer; margin-top: 16px; }
  table { width: 100%; border-collapse: collapse; font-size: 14px; }
  th, td { padding: 12px; border-bottom: 1px solid #e2e8f0; text-align: left; }
  th { background: #f8fafc; }
  .alert { background: #dcfce7; color: #166534; padding: 12px 16px; border-radius: 8px; margin-bottom: 16px; font-weight: 600; }
</style>
</head>
<body>
  <aside class="sidebar">
    <div class="brand">MOTO-PRO SERVICE<span>Sistem Terintegrasi Bengkel</span></div>
    <a href="/?menu=1" class="nav-link {{ $menu == 1 ? 'active' : '' }}">1. Data Pelanggan</a>
    <a href="/?menu=2" class="nav-link {{ $menu == 2 ? 'active' : '' }}">2. Data Kendaraan</a>
    <a href="/?menu=3" class="nav-link {{ $menu == 3 ? 'active' : '' }}">3. Daftar Service</a>
    <a href="/?menu=4" class="nav-link {{ $menu == 4 ? 'active' : '' }}">4. Data Service</a>
    <a href="/?menu=5" class="nav-link {{ $menu == 5 ? 'active' : '' }}">5. Pembayaran Service</a>
  </aside>

  <main class="main">
    <div class="topbar">
      <h1>Dashboard Manajemen Service Motor</h1>
      <span class="badge-api">REST API Connected</span>
    </div>

    @if(session('success'))<div class="alert">{{ session('success') }}</div>@endif

    <div class="stats">
      <div class="stat-card"><small>Total Pelanggan</small><h3>{{ $pelanggans->count() }}</h3></div>
      <div class="stat-card"><small>Unit Kendaraan</small><h3>{{ $kendaraans->count() }}</h3></div>
      <div class="stat-card"><small>Antrian Servis</small><h3>{{ $daftarServices->count() }}</h3></div>
      <div class="stat-card"><small>Transaksi Selesai</small><h3>{{ $pembayarans->count() }}</h3></div>
    </div>

    @if($menu == 1)
      <div class="card">
        <div class="card-title">1. Input Data Pelanggan</div>
        <form action="{{ route('pelanggan.store') }}" method="POST">
          @csrf
          <div class="grid-2">
            <div class="form-group"><label>Id Pelanggan</label><input type="text" name="id_pelanggan" placeholder="Contoh: PLG004" required></div>
            <div class="form-group"><label>Nama Lengkap</label><input type="text" name="nama_lengkap" required></div>
            <div class="form-group"><label>No HP</label><input type="text" name="no_hp" required></div>
            <div class="form-group"><label>Pekerjaan</label><input type="text" name="pekerjaan" required></div>
          </div>
          <div class="form-group" style="margin-top:12px"><label>Alamat Pelanggan</label><textarea name="alamat_pelanggan" rows="2" required></textarea></div>
          <button type="submit" class="btn">Simpan Data Pelanggan</button>
        </form>
      </div>
      <div class="card">
        <div class="card-title">Data Pelanggan Terdaftar</div>
        <table>
          <thead><tr><th>Id Pelanggan</th><th>Nama Lengkap</th><th>No HP</th><th>Alamat</th><th>Pekerjaan</th></tr></thead>
          <tbody>@foreach($pelanggans as $p)<tr><td><b>{{ $p->id_pelanggan }}</b></td><td>{{ $p->nama_lengkap }}</td><td>{{ $p->no_hp }}</td><td>{{ $p->alamat_pelanggan }}</td><td>{{ $p->pekerjaan }}</td></tr>@endforeach</tbody>
        </table>
      </div>
    @else
      @include('menu_' . $menu)
    @endif
  </main>
</body>
</html>
