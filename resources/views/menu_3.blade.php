<div class="card">
  <div class="card-title">3. Input Daftar Service (Dropdown & Auto-Fill API)</div>
  <form action="{{ route('daftar-service.store') }}" method="POST">
    @csrf
    <div class="grid-2">
      <div class="form-group"><label>Id Servis Pelanggan</label><input type="text" name="id_servis" placeholder="Contoh: SRV001" required></div>
      <div class="form-group"><label>No Plat Kendaraan (Dropdown)</label>
        <select name="no_plat" required><option value="">-- Pilih No Plat --</option>@foreach($kendaraans as $k)<option value="{{ $k->no_plat }}">{{ $k->no_plat }} ({{ $k->nama_pemilik }})</option>@endforeach</select>
      </div>
      <div class="form-group"><label>Id Pelanggan (Dropdown)</label>
        <select name="id_pelanggan" id="sel_plg" required><option value="">-- Pilih Id Pelanggan --</option>@foreach($pelanggans as $p)<option value="{{ $p->id_pelanggan }}">{{ $p->id_pelanggan }}</option>@endforeach</select>
      </div>
      <div class="form-group"><label>Nama Pelanggan (Otomatis dari API)</label><input type="text" name="nama_pelanggan" id="auto_nama" readonly required></div>
      <div class="form-group"><label>Tanggal Servis</label><input type="date" name="tanggal_servis" required></div>
      <div class="form-group"><label>Keluhan Kendaraan</label><input type="text" name="keluhan_kendaraan" required></div>
    </div>
    <button type="submit" class="btn">Simpan Daftar Service</button>
  </form>
</div>
<div class="card">
  <div class="card-title">Antrian Daftar Service</div>
  <table>
    <thead><tr><th>Id Servis</th><th>No Plat</th><th>Id Pelanggan</th><th>Nama Pelanggan</th><th>Keluhan</th><th>Tanggal</th></tr></thead>
    <tbody>@foreach($daftarServices as $ds)<tr><td><b>{{ $ds->id_servis }}</b></td><td>{{ $ds->no_plat }}</td><td>{{ $ds->id_pelanggan }}</td><td>{{ $ds->nama_pelanggan }}</td><td>{{ $ds->keluhan_kendaraan }}</td><td>{{ $ds->tanggal_servis }}</td></tr>@endforeach</tbody>
  </table>
</div>
<script>
  document.getElementById('sel_plg').addEventListener('change', function() {
    if (!this.value) { document.getElementById('auto_nama').value = ''; return; }
    fetch('/api/pelanggan/' + this.value).then(r => r.json()).then(r => { document.getElementById('auto_nama').value = r.status ? r.data.nama_lengkap : ''; });
  });
</script>
