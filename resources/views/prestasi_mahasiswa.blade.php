<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PRESTASI MAHASISWA</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
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
    <h1>Halaman PRESTASI MAHASISWA</h1>
    <p>Ini adalah halaman untuk informasi prestasi mahasiswa.</p>
</body>
</html>