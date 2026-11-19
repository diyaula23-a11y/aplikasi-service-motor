<div class="card">
  <div class="card-title">5. Pembayaran Service</div>
  <form action="{{ route('pembayaran.store') }}" method="POST">
    @csrf
    <div class="grid-2">
      <div class="form-group"><label>Id Servis Pelanggan (Dropdown)</label>
        <select name="id_servis" required><option value="">-- Pilih Id Servis --</option>@foreach($daftarServices as $ds)<option value="{{ $ds->id_servis }}">{{ $ds->id_servis }} - {{ $ds->nama_pelanggan }}</option>@endforeach</select>
      </div>
      <div class="form-group"><label>Jumlah Biaya Servis (Rp)</label><input type="number" name="jumlah_biaya" placeholder="150000" required></div>
      <div class="form-group"><label>Jenis Pembayaran</label>
        <div class="radio-group">
          <label><input type="radio" name="jenis_pembayaran" value="Cash / Tunai" required> Cash / Tunai</label>
          <label><input type="radio" name="jenis_pembayaran" value="Non Tunai" required> Non Tunai</label>
        </div>
      </div>
      <div class="form-group"><label>Keterangan</label><input type="text" name="keterangan" placeholder="Lunas"></div>
    </div>
    <button type="submit" class="btn">Simpan Pembayaran</button>
  </form>
</div>
<div class="card">
  <div class="card-title">Data Pembayaran Service</div>
  <table>
    <thead><tr><th>Id Servis</th><th>Jumlah Biaya</th><th>Jenis Pembayaran</th><th>Keterangan</th></tr></thead>
    <tbody>@foreach($pembayarans as $pb)<tr><td><b>{{ $pb->id_servis }}</b></td><td>Rp {{ number_format($pb->jumlah_biaya, 0, ',', '.') }}</td><td>{{ $pb->jenis_pembayaran }}</td><td>{{ $pb->keterangan }}</td></tr>@endforeach</tbody>
  </table>
</div>
