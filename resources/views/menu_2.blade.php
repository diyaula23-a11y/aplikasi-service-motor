<div class="card">
  <div class="card-title">2. Input Data Kendaraan</div>
  <form action="{{ route('kendaraan.store') }}" method="POST">
    @csrf
    <div class="grid-2">
      <div class="form-group"><label>No Plat Kendaraan</label><input type="text" name="no_plat" placeholder="Contoh: BL 1234 AB" required></div>
      <div class="form-group"><label>Jenis Kendaraan</label>
        <div class="radio-group">
          <label><input type="radio" name="jenis_kendaraan" value="Matic" required> Matic</label>
          <label><input type="radio" name="jenis_kendaraan" value="Manual Transmisi" required> Manual Transmisi</label>
        </div>
      </div>
      <div class="form-group"><label>No STNK</label><input type="text" name="no_stnk" required></div>
      <div class="form-group"><label>Tahun Pembuatan Kendaraan</label><input type="number" name="tahun_pembuatan" placeholder="2024" required></div>
      <div class="form-group"><label>Nama Pemilik</label><input type="text" name="nama_pemilik" required></div>
      <div class="form-group"><label>Warna Kendaraan</label><input type="text" name="warna_kendaraan" required></div>
    </div>
    <button type="submit" class="btn">Simpan Data Kendaraan</button>
  </form>
</div>
<div class="card">
  <div class="card-title">Data Unit Kendaraan</div>
  <table>
    <thead><tr><th>No Plat</th><th>Jenis</th><th>No STNK</th><th>Tahun</th><th>Pemilik</th><th>Warna</th></tr></thead>
    <tbody>@foreach($kendaraans as $k)<tr><td><b>{{ $k->no_plat }}</b></td><td>{{ $k->jenis_kendaraan }}</td><td>{{ $k->no_stnk }}</td><td>{{ $k->tahun_pembuatan }}</td><td>{{ $k->nama_pemilik }}</td><td>{{ $k->warna_kendaraan }}</td></tr>@endforeach</tbody>
  </table>
</div>
