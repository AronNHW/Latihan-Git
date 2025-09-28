<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>HMTI TI D3 — Beranda</title>
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

  <main id="main">
    <section class="hero">
      <div class="container">
        <div class="hero-card" role="region" aria-label="Pengantar HMTI TI D3">
          <h1 class="hero-title">HIMPUNAN MAHASISWA<br><span>TEKNOLOGI INFORMASI&nbsp;D3</span></h1>
          <p class="hero-desc">HMTI Politeknik Negeri Tanah Laut (POLITALA) adalah organisasi kemahasiswaan yang bergerak di bidang teknologi informasi dari berdasarkan semangat kolaborasi, inovasi, dan profesionalisme.</p>
        </div>
      </div>
    </section>

    <section class="info">
      <div class="container">
        <h2>Pusat <span class="accent">Informasi</span> Seputar Program</h2>
        <h3>Studi Teknologi Informasi</h3>
        <p>Dengan website ini, kalian bisa memantau acara mendatang ataupun yang sedang berlangsung dan HMTI. Dan juga, kalian dapat mencari informasi mengenai program studi Teknologi Informasi, termasuk informasi tentang peminatan dan lain sebagainya.</p>
      </div>
    </section>
  </main>
</body>
</html>