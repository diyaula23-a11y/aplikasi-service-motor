<div class="card">
  <div class="card-title">4. Input Data Service (Dropdown & Auto-Fill Keluhan API)</div>
  <form action="{{ route('data-service.store') }}" method="POST">
    @csrf
    <div class="grid-2">
      <div class="form-group"><label>Id Servis Pelanggan (Dropdown)</label>
        <select name="id_servis" id="sel_srv4" required><option value="">-- Pilih Id Servis --</option>@foreach($daftarServices as $ds)<option value="{{ $ds->id_servis }}">{{ $ds->id_servis }} - {{ $ds->nama_pelanggan }}</option>@endforeach</select>
      </div>
      <div class="form-group"><label>Keluhan Kendaraan (Otomatis dari API)</label><input type="text" name="keluhan_kendaraan" id="auto_keluhan" readonly required></div>
      <div class="form-group"><label>Estimasi Service</label><input type="text" name="estimasi_service" placeholder="Contoh: 2 Jam" required></div>
      <div class="form-group"><label>Nama Mekanik</label><input type="text" name="nama_mekanik" required></div>
      <div class="form-group"><label>Sparepart Pengganti</label><input type="text" name="sparepart_pengganti" required></div>
    </div>
    <button type="submit" class="btn">Simpan Data Service</button>
  </form>
</div>
<div class="card">
  <div class="card-title">Riwayat Pengerjaan Service</div>
  <table>
    <thead><tr><th>Id Servis</th><th>Keluhan</th><th>Estimasi</th><th>Mekanik</th><th>Sparepart</th></tr></thead>
    <tbody>@foreach($dataServices as $dts)<tr><td><b>{{ $dts->id_servis }}</b></td><td>{{ $dts->keluhan_kendaraan }}</td><td>{{ $dts->estimasi_service }}</td><td>{{ $dts->nama_mekanik }}</td><td>{{ $dts->sparepart_pengganti }}</td></tr>@endforeach</tbody>
  </table>
</div>
<script>
  document.getElementById('sel_srv4').addEventListener('change', function() {
    if (!this.value) { document.getElementById('auto_keluhan').value = ''; return; }
    fetch('/api/daftar-service/' + this.value).then(r => r.json()).then(r => { document.getElementById('auto_keluhan').value = r.status ? r.data.keluhan_kendaraan : ''; });
  });
</script>
