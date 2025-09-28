<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>DIVISI</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
</head>
<body id="divisi-page">
  <header>
    <div class="container nav" role="navigation" aria-label="Menu utama">
      <div class="brand">
        {{-- Ganti src dengan file logomu --}}
        <img class="brand-logo" src="{{ asset('images/Logo_hima.png') }}" alt="Logo HMTI POLITALA">
        
      </div>

      <nav class="menu" aria-label="Halaman">
        <a href="{{ url('/') }}">HOME</a>
        <a href="{{ url('divisi') }}">DIVISI</a>
        <a href="{{ url('profil') }}">PROFIL</a>
        <a href="{{ url('berita') }}">BERITA</a>
        <a href="{{ url('pendaftaran') }}">PENDAFTARAN</a>
        <a href="{{ url('prestasi-mahasiswa') }}">PRESTASI MAHASISWA</a>
        <a href="{{ url('kontak-aspirasi') }}">KOTAK ASPIRASI</a>
      </nav>

      <a class="login-btn" href="{{ route('login') }}" aria-label="Masuk">LOGIN</a>
    </div>
  </header>

  <h1>Technopreneurship</h1>
  <div class="logo">
    <img src="{{ asset('images/Logo_hima.png') }}" alt="Logo Technopreneurship" width="120">
  </div>
  <p class="description">
    Technopreneurship adalah gabungan dari “technology” dan “entrepreneurship”, yang berarti kewirausahaan yang berbasis teknologi.
  </p>

  <h2>Pengurus Technopreneurship</h2>

  <div class="pengurus">
    <div class="card">
      <div class="image">GAMBAR</div>
      <div class="info">
        <p><b>Nama</b></p>
        <p>Jabatan</p>
      </div>
    </div>
    <div class="card">
      <div class="image">GAMBAR</div>
      <div class="info">
        <p><b>Nama</b></p>
        <p>Jabatan</p>
      </div>
    </div>
    <div class="card">
      <div class="image">GAMBAR</div>
      <div class="info">
        <p><b>Nama</b></p>
        <p>Jabatan</p>
      </div>
    </div>
    <div class="card">
      <div class="image">GAMBAR</div>
      <div class="info">
        <p><b>Nama</b></p>
        <p>Jabatan</p>
      </div>
    </div>
  </div>
</body>
</html>