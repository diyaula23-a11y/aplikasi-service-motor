<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NU MOTO IMPERIAL • Nadiyatul Ula</title>
<style>
  :root {
    --canvas: #fbf5f7;
    --surface: #ffffff;
    --blush: #f8e6ee;
    --border-rose: #e3b8c8;
    --burgundy: #4f0924;
    --rose: #9d174d;
    --pink-accent: #be185d;
    --gold: #d97706;
    --gold-bright: #fde68a;
    --ink: #220f17;
    --muted: #765563;
  }
  * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', Inter, system-ui, sans-serif; }
  body {
    background: radial-gradient(circle at 50% -10%, #f3cddc 0%, #fbf5f7 45%, #f6e9ee 100%);
    color: var(--ink);
    min-height: 100vh;
    padding: 22px 28px 46px;
    position: relative;
  }
  body::before {
    content: ''; position: fixed; inset: 10px;
    border: 1.5px solid rgba(217, 119, 6, 0.35);
    border-radius: 30px; pointer-events: none; z-index: 99;
  }

  .container { max-width: 1420px; margin: 0 auto; }

  /* TOP IMPERIAL NAVIGATION BAR */
  .top-bar {
    background: rgba(255, 255, 255, 0.94);
    backdrop-filter: blur(20px);
    border: 1.5px solid var(--border-rose);
    outline: 4px solid rgba(254, 243, 199, 0.75);
    border-radius: 22px;
    padding: 15px 28px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 12px 34px rgba(79, 9, 36, 0.08);
    margin-bottom: 22px;
  }
  .brand { display: flex; align-items: center; gap: 15px; }
  .monogram {
    width: 48px; height: 48px; border-radius: 15px;
    background: linear-gradient(135deg, #3b071c 0%, #9d174d 55%, #d97706 100%);
    color: #fde68a; font-family: Georgia, serif; font-weight: 900; font-size: 18px; letter-spacing: 1px;
    display: flex; align-items: center; justify-content: center;
    border: 1.5px solid #fde68a;
    box-shadow: 0 8px 20px rgba(79, 9, 36, 0.3);
  }
  .brand-title { font-family: Georgia, serif; font-size: 20px; font-weight: 900; color: var(--burgundy); letter-spacing: 0.3px; }
  .brand-sub { font-size: 11.5px; color: var(--muted); font-weight: 600; }

  .nav-pills {
    display: flex; gap: 7px;
    background: var(--blush);
    padding: 6px; border-radius: 16px;
    border: 1px solid var(--border-rose);
  }
  .nav-link {
    text-decoration: none; color: var(--muted);
    font-size: 13px; font-weight: 700;
    padding: 10px 18px; border-radius: 11px;
    transition: all 0.28s cubic-bezier(0.34, 1.56, 0.64, 1);
  }
  .nav-link:hover { color: var(--burgundy); background: rgba(255,255,255,0.9); transform: translateY(-2px); }
  .nav-link:active { transform: scale(0.92) !important; }
  .nav-link.active {
    background: linear-gradient(135deg, #4f0924 0%, #9d174d 100%);
    color: #fff; font-weight: 700;
    border: 1px solid #fde68a;
    box-shadow: 0 6px 18px rgba(79, 9, 36, 0.3);
  }
  /* IMPERIAL SHOWROOM HERO DENGAN MOTOR REALISTIS & PANGGUNG EMAS */
  .exec-hero {
    background: radial-gradient(circle at 52% 20%, #831843 0%, #4f0924 55%, #2d0414 100%);
    border: 2px solid #f59e0b;
    outline: 5px solid rgba(255, 255, 255, 0.82);
    border-radius: 28px;
    padding: 28px 36px;
    display: grid;
    grid-template-columns: 1.15fr 1.2fr 0.95fr;
    gap: 24px;
    align-items: center;
    color: #fff;
    box-shadow: 0 22px 50px rgba(45, 4, 20, 0.28);
    margin-bottom: 24px;
    position: relative;
    overflow: hidden;
  }
  .spotlight-cone {
    position: absolute; top: -20px; left: 50%; transform: translateX(-50%);
    width: 340px; height: 220px;
    background: radial-gradient(ellipse at top, rgba(253, 230, 138, 0.28) 0%, transparent 72%);
    pointer-events: none;
  }
  .hero-eyebrow {
    display: inline-block; font-size: 10px; font-weight: 800; letter-spacing: 1.6px;
    color: #fde68a; text-transform: uppercase;
    background: rgba(253, 230, 138, 0.14); border: 1px solid rgba(253, 230, 138, 0.5);
    padding: 5px 14px; border-radius: 20px; margin-bottom: 10px;
  }
  .exec-hero h1 { font-family: Georgia, serif; font-size: 27px; font-weight: 900; line-height: 1.25; color: #fff; }
  .exec-hero p { font-size: 13px; color: #fce7f3; margin-top: 7px; line-height: 1.55; opacity: 0.92; }

  /* ANIMASI PUTARAN SHOWROOM ANGGUN & REALISTIS */
  @keyframes gracefulTurntable {
    0%   { transform: perspective(900px) rotateY(-24deg) translateY(0px); }
    25%  { transform: perspective(900px) rotateY(0deg) translateY(-4px); }
    50%  { transform: perspective(900px) rotateY(24deg) translateY(0px); }
    75%  { transform: perspective(900px) rotateY(0deg) translateY(-4px); }
    100% { transform: perspective(900px) rotateY(-24deg) translateY(0px); }
  }
  @keyframes full360Showcase {
    0%   { transform: perspective(850px) rotateY(0deg); }
    100% { transform: perspective(850px) rotateY(360deg); }
  }
  @keyframes ringRotateCW { from { transform: rotateX(74deg) rotateZ(0deg); } to { transform: rotateX(74deg) rotateZ(360deg); } }
  @keyframes ringRotateCCW { from { transform: rotateX(74deg) rotateZ(360deg); } to { transform: rotateX(74deg) rotateZ(0deg); } }
  @keyframes wowPopIn { 0% { opacity: 0; transform: translateY(18px) scale(0.98); } 100% { opacity: 1; transform: translateY(0) scale(1); } }
  @keyframes shimmerGold { 0% { left: -90%; } 100% { left: 150%; } }

  .showroom-pedestal {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 6px 0;
  }
  .realistic-bike-wrap {
    z-index: 3;
    transform-style: preserve-3d;
    animation: full360Showcase 9s cubic-bezier(0.45, 0.05, 0.55, 0.95) infinite;
  }
  .showroom-pedestal:hover .realistic-bike-wrap {
    animation-duration: 3s;
  }
  .pedestal-rings {
    position: relative;
    width: 250px; height: 42px;
    margin-top: -18px;
    display: flex; align-items: center; justify-content: center;
  }
  .ring-outer {
    position: absolute; width: 250px; height: 250px; border-radius: 50%;
    border: 2.5px dashed #fde68a;
    box-shadow: 0 0 28px rgba(253, 230, 138, 0.45);
    animation: ringRotateCW 14s linear infinite;
  }
  .ring-inner {
    position: absolute; width: 195px; height: 195px; border-radius: 50%;
    border: 2px solid rgba(244, 114, 182, 0.85);
    background: radial-gradient(circle, rgba(253, 230, 138, 0.28) 0%, transparent 70%);
    animation: ringRotateCCW 10s linear infinite;
  }

  .architect-card {
    background: linear-gradient(145deg, rgba(255,255,255,0.16), rgba(253,230,138,0.12));
    backdrop-filter: blur(14px);
    border: 1.5px solid #fde68a;
    border-radius: 22px;
    padding: 20px 24px;
    text-align: right;
    box-shadow: 0 12px 30px rgba(0,0,0,0.25);
    z-index: 2;
  }
  .architect-card small { display: block; font-size: 10px; letter-spacing: 1.5px; color: #fde68a; font-weight: 800; text-transform: uppercase; }
  .architect-card strong { display: block; font-family: Georgia, serif; font-size: 23px; color: #fff; font-weight: 900; margin: 5px 0; }
  .architect-card span { font-size: 11.5px; color: #fbcfe8; font-weight: 600; }

  .kpi-row { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; margin-bottom: 24px; }
  .kpi-box {
    background: linear-gradient(180deg, #ffffff 0%, #fff9fb 100%);
    border: 1.5px solid var(--border-rose);
    border-radius: 22px; padding: 20px 24px;
    box-shadow: 0 10px 28px rgba(79, 9, 36, 0.06);
    display: flex; justify-content: space-between; align-items: center;
    position: relative; overflow: hidden;
    animation: wowPopIn 0.5s cubic-bezier(0.22, 1, 0.36, 1) both;
    transition: all 0.28s cubic-bezier(0.34, 1.56, 0.64, 1);
  }
  .kpi-box:nth-child(2) { animation-delay: 0.07s; }
  .kpi-box:nth-child(3) { animation-delay: 0.14s; }
  .kpi-box:nth-child(4) { animation-delay: 0.21s; }
  .kpi-box:hover { transform: translateY(-6px) scale(1.015); border-color: #d97706; box-shadow: 0 18px 36px rgba(79, 9, 36, 0.13); }
  .kpi-box::after { content: ''; position: absolute; bottom: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, #9d174d, #d97706); }
  .kpi-box small { font-size: 11px; font-weight: 800; color: var(--muted); text-transform: uppercase; letter-spacing: 0.5px; }
  .kpi-box h3 { font-family: Georgia, serif; font-size: 31px; font-weight: 900; color: var(--burgundy); margin: 4px 0 2px; }
  .kpi-box span { font-size: 11px; color: var(--pink-accent); font-weight: 600; }
  .workspace-grid { display: grid; grid-template-columns: 1fr 1.15fr; gap: 24px; align-items: start; }
  .card {
    background: var(--surface); border: 1.5px solid var(--border-rose);
    outline: 4px solid rgba(255, 255, 255, 0.85);
    border-radius: 26px; padding: 30px 32px;
    box-shadow: 0 14px 38px rgba(79, 9, 36, 0.08);
    animation: wowPopIn 0.55s cubic-bezier(0.22, 1, 0.36, 1) both;
  }
  .card-title { font-family: Georgia, serif; font-size: 19px; font-weight: 900; color: var(--burgundy); margin-bottom: 22px; padding-bottom: 14px; border-bottom: 1.5px solid var(--blush); }
  .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
  .form-group { display: flex; flex-direction: column; }
  label { font-size: 12.5px; font-weight: 700; color: var(--burgundy); margin-bottom: 6px; }
  input, select, textarea {
    padding: 12px 15px; border: 1.5px solid var(--border-rose);
    border-radius: 13px; font-size: 13.5px;
    color: var(--ink); background: #fdf9fb;
    transition: all 0.28s cubic-bezier(0.34, 1.56, 0.64, 1);
  }
  input:focus, select:focus, textarea:focus {
    outline: none; border-color: var(--rose); background: #fff;
    transform: translateY(-3px) scale(1.01);
    box-shadow: 0 10px 22px rgba(157, 23, 77, 0.14);
  }
  input[readonly] { background: var(--blush); color: var(--rose); font-weight: 700; border-style: dashed; }
  .radio-group { display: flex; gap: 18px; padding-top: 8px; font-size: 13.5px; font-weight: 600; }
  .btn {
    background: linear-gradient(135deg, #4f0924 0%, #be185d 100%);
    color: #fff; border: 1.5px solid #fde68a;
    padding: 14px 32px; border-radius: 14px;
    font-weight: 800; font-size: 13.5px; cursor: pointer; margin-top: 22px;
    box-shadow: 0 10px 24px rgba(79, 9, 36, 0.3);
    transition: all 0.28s cubic-bezier(0.34, 1.56, 0.64, 1);
    position: relative; overflow: hidden;
  }
  .btn::after {
    content: ''; position: absolute; top: 0; left: -90%; width: 55%; height: 100%;
    background: linear-gradient(90deg, transparent, rgba(253, 230, 138, 0.7), transparent);
    transform: skewX(-25deg);
  }
  .btn:hover { transform: translateY(-3px) scale(1.02); box-shadow: 0 14px 30px rgba(79, 9, 36, 0.4); }
  .btn:hover::after { animation: shimmerGold 0.75s ease forwards; }
  .btn:active { transform: scale(0.92) !important; }

  table { width: 100%; border-collapse: collapse; font-size: 13px; border-radius: 14px; overflow: hidden; }
  th {
    background: linear-gradient(90deg, #f8e6ee, #fef3c7); color: var(--burgundy);
    font-weight: 800; text-align: left; padding: 14px 15px;
    border-bottom: 1.5px solid var(--border-rose);
    font-size: 11.5px; text-transform: uppercase; letter-spacing: 0.5px;
  }
  td { padding: 13px 15px; border-bottom: 1px solid #f5eaee; color: var(--ink); transition: 0.2s; }
  tr:hover td { background: #fdf5f8; }
  .alert {
    background: linear-gradient(90deg, #fce7f3, #fef3c7); color: var(--burgundy);
    padding: 14px 22px; border-radius: 15px; font-weight: 700; font-size: 13.5px;
    border: 1.5px solid #f59e0b; margin-bottom: 22px;
    animation: wowPopIn 0.45s ease both;
  }
  .exec-footer {
    margin-top: 30px; padding-top: 18px; border-top: 1px solid var(--border-rose);
    display: flex; justify-content: space-between; align-items: center;
    font-size: 12px; color: var(--muted); font-weight: 600;
  }
</style>
</head>
<body>

<div class="container">
  <header class="top-bar">
    <div class="brand">
      <div class="monogram">NU</div>
      <div>
        <div class="brand-title">NU Moto Imperial</div>
        <div class="brand-sub">Enterprise Motorcycle Service &amp; RESTful API</div>
      </div>
    </div>

    <nav class="nav-pills">
      <a href="/?menu=1" class="nav-link {{ $menu == 1 ? 'active' : '' }}">01. Pelanggan</a>
      <a href="/?menu=2" class="nav-link {{ $menu == 2 ? 'active' : '' }}">02. Kendaraan</a>
      <a href="/?menu=3" class="nav-link {{ $menu == 3 ? 'active' : '' }}">03. Daftar Service</a>
      <a href="/?menu=4" class="nav-link {{ $menu == 4 ? 'active' : '' }}">04. Data Service</a>
      <a href="/?menu=5" class="nav-link {{ $menu == 5 ? 'active' : '' }}">05. Pembayaran</a>
    </nav>
  </header>

  <section class="exec-hero">
    <div class="spotlight-cone"></div>
    <div style="z-index:2;">
      <span class="hero-eyebrow">Enterprise System Integration &bull; 2026</span>
      <h1>Service Motor Management &amp; Telemetry</h1>
      <p>Arsitektur terintegrasi berbasis Laravel, MySQL Relational Database, dan REST API otomatis.</p>
    </div>

    <!-- PANGGUNG SHOWROOM 3D: MOTOR SPORT REALISTIS MULTI-LAYER -->
    <div class="showroom-pedestal">
      <div class="realistic-bike-wrap">
        <svg width="265" height="122" viewBox="0 0 320 145" fill="none" xmlns="http://w3.org">
          <!-- Bayangan Lantai -->
          <ellipse cx="160" cy="132" rx="115" ry="8" fill="#000000" fill-opacity="0.45"/>
          <!-- Ban & Velg Gold Alloy Belakang -->
          <circle cx="78" cy="102" r="27" fill="#18181b" stroke="#09090b" stroke-width="5"/>
          <circle cx="78" cy="102" r="19" fill="#27272a" stroke="#f59e0b" stroke-width="2.5"/>
          <circle cx="78" cy="102" r="13" stroke="#e2e8f0" stroke-width="1.5" stroke-dasharray="4 3"/>
          <path d="M78 83V121M59 102H97M65 89L91 115M91 89L65 115" stroke="#fbbf24" stroke-width="1.8"/>
          <circle cx="78" cy="102" r="6" fill="#fde68a" stroke="#92400e" stroke-width="1.5"/>
          <!-- Ban & Velg Gold Alloy Depan -->
          <circle cx="242" cy="102" r="27" fill="#18181b" stroke="#09090b" stroke-width="5"/>
          <circle cx="242" cy="102" r="19" fill="#27272a" stroke="#f59e0b" stroke-width="2.5"/>
          <circle cx="242" cy="102" r="13" stroke="#e2e8f0" stroke-width="1.5" stroke-dasharray="4 3"/>
          <path d="M242 83V121M223 102H261M229 89L255 115M255 89L229 115" stroke="#fbbf24" stroke-width="1.8"/>
          <circle cx="242" cy="102" r="6" fill="#fde68a" stroke="#92400e" stroke-width="1.5"/>
          <!-- Swingarm & Mesin Blok Metalik -->
          <path d="M78 102L134 88H182L168 66H122L78 102Z" fill="#3f3f46" stroke="#a1a1aa" stroke-width="1.5"/>
          <rect x="134" y="68" width="42" height="24" rx="5" fill="url(#engineMetal)" stroke="#d4d4d8" stroke-width="1.2"/>
          <!-- Knalpot Titanium Chrome -->
          <path d="M62 94L132 86L136 93L64 103Z" fill="url(#chromePipe)" stroke="#f8fafc" stroke-width="1"/>
          <!-- Suspensi Upside-Down Gold -->
          <path d="M204 42L242 102" stroke="#f59e0b" stroke-width="6.5" stroke-linecap="round"/>
          <path d="M204 42L242 102" stroke="#fef08a" stroke-width="2" stroke-linecap="round"/>
          <!-- Fairing Bodi Utama Metallic Rose-Gold & Burgundy -->
          <path d="M46 58L108 54L146 38C172 30 202 36 226 56L208 82H134L104 72L46 58Z" fill="url(#fairingMetallic)" stroke="#fde68a" stroke-width="1.8"/>
          <!-- Strip Aksen Emas pada Fairing -->
          <path d="M126 62L212 56L204 68L132 70L126 62Z" fill="url(#goldTrim)"/>
          <!-- Jok Kulit Ergonomis -->
          <path d="M98 54C116 45 138 45 152 54L142 60H104L98 54Z" fill="#18181b" stroke="#52525b" stroke-width="1"/>
          <!-- Windshield Transparan & Lampu LED -->
          <path d="M188 36L216 22L224 38L200 46Z" fill="#bae6fd" fill-opacity="0.65" stroke="#e0f2fe" stroke-width="1.2"/>
          <ellipse cx="222" cy="54" rx="8" ry="4" fill="#fef9c3"/>
          <defs>
            <linearGradient id="fairingMetallic" x1="46" y1="30" x2="226" y2="82" gradientUnits="userSpaceOnUse">
              <stop stop-color="#f472b6"/><stop offset="0.45" stop-color="#be185d"/><stop offset="1" stop-color="#4c0519"/>
            </linearGradient>
            <linearGradient id="goldTrim" x1="126" y1="56" x2="212" y2="68" gradientUnits="userSpaceOnUse">
              <stop stop-color="#fde68a"/><stop offset="1" stop-color="#d97706"/>
            </linearGradient>
            <linearGradient id="engineMetal" x1="134" y1="68" x2="176" y2="92" gradientUnits="userSpaceOnUse">
              <stop stop-color="#71717a"/><stop offset="1" stop-color="#27272a"/>
            </linearGradient>
            <linearGradient id="chromePipe" x1="62" y1="86" x2="136" y2="103" gradientUnits="userSpaceOnUse">
              <stop stop-color="#f1f5f9"/><stop offset="0.5" stop-color="#94a3b8"/><stop offset="1" stop-color="#e2e8f0"/>
            </linearGradient>
          </defs>
        </svg>
      </div>
      <div class="pedestal-rings">
        <div class="ring-outer"></div>
        <div class="ring-inner"></div>
      </div>
    </div>

    <div class="architect-card">
      <small>Founder &amp; System Architect</small>
      <strong>Nadiyatul Ula</strong>
      <span>ID: NU-2026 &bull; REST API Verified</span>
    </div>
  </section>

  @if(session('success'))<div class="alert">{{ session('success') }}</div>@endif

   <section class="kpi-row">
    <div class="kpi-box">
      <div><small>Pelanggan Terdaftar</small><h3>{{ $pelanggans->count() }}</h3><span>Relasi Primary Key Aktif</span></div>
      <svg width="64" height="32" viewBox="0 0 64 32" fill="none"><path d="M2 26L16 18L30 22L46 10L62 6" stroke="#be185d" stroke-width="2.5" stroke-linecap="round"/><circle cx="62" cy="6" r="3.5" fill="#d97706"/></svg>
    </div>
    <div class="kpi-box">
      <div><small>Unit Kendaraan</small><h3>{{ $kendaraans->count() }}</h3><span>Matic &amp; Manual Transmisi</span></div>
      <svg width="64" height="32" viewBox="0 0 64 32" fill="none"><path d="M2 24L18 20L32 12L48 16L62 4" stroke="#be185d" stroke-width="2.5" stroke-linecap="round"/><circle cx="62" cy="4" r="3.5" fill="#d97706"/></svg>
    </div>
    <div class="kpi-box">
      <div><small>Antrian Servis</small><h3>{{ $daftarServices->count() }}</h3><span>Auto-Fill JSON Endpoint</span></div>
      <svg width="64" height="32" viewBox="0 0 64 32" fill="none"><path d="M2 28L16 16L32 18L46 8L62 5" stroke="#be185d" stroke-width="2.5" stroke-linecap="round"/><circle cx="62" cy="5" r="3.5" fill="#d97706"/></svg>
    </div>
    <div class="kpi-box">
      <div><small>Transaksi Selesai</small><h3>{{ $pembayarans->count() }}</h3><span>Tunai &amp; Non-Tunai</span></div>
      <svg width="64" height="32" viewBox="0 0 64 32" fill="none"><path d="M2 25L18 22L34 10L48 12L62 3" stroke="#be185d" stroke-width="2.5" stroke-linecap="round"/><circle cx="62" cy="3" r="3.5" fill="#d97706"/></svg>
    </div>
  </section>

  <div class="workspace-grid">
    @if($menu == 1)
      <div class="card">
        <div class="card-title">01. Registrasi Data Pelanggan</div>
        <form action="{{ route('pelanggan.store') }}" method="POST">
          @csrf
          <div class="grid-2">
            <div class="form-group"><label>Id Pelanggan</label><input type="text" name="id_pelanggan" placeholder="Contoh: PLG004" required></div>
            <div class="form-group"><label>Nama Lengkap</label><input type="text" name="nama_lengkap" placeholder="Masukkan nama lengkap" required></div>
            <div class="form-group"><label>No HP</label><input type="text" name="no_hp" placeholder="08xxxxxxxxxx" required></div>
            <div class="form-group"><label>Pekerjaan</label><input type="text" name="pekerjaan" placeholder="Contoh: Mahasiswa" required></div>
          </div>
          <div class="form-group" style="margin-top:16px"><label>Alamat Pelanggan</label><textarea name="alamat_pelanggan" rows="2" placeholder="Masukkan alamat lengkap" required></textarea></div>
          <button type="submit" class="btn">Simpan Data Pelanggan</button>
        </form>
      </div>
      <div class="card">
        <div class="card-title">Direktori Pelanggan Terdaftar</div>
        <table>
          <thead><tr><th>Id</th><th>Nama Lengkap</th><th>No HP</th><th>Alamat</th><th>Pekerjaan</th></tr></thead>
          <tbody>@foreach($pelanggans as $p)<tr><td><strong>{{ $p->id_pelanggan }}</strong></td><td>{{ $p->nama_lengkap }}</td><td>{{ $p->no_hp }}</td><td>{{ $p->alamat_pelanggan }}</td><td>{{ $p->pekerjaan }}</td></tr>@endforeach</tbody>
        </table>
      </div>
    @else
      @include('menu_' . $menu)
    @endif
  </div>

  <footer class="exec-footer">
    <div><strong>NU Moto Imperial</strong> &mdash; Sistem Terintegrasi Service Motor</div>
    <div>System Owner &amp; Architect: <strong>Nadiyatul Ula</strong> &bull; 2026</div>
  </footer>
</div>

</body>
</html>
