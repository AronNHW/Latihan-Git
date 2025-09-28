<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Profil HIMA-TI Politala</title>
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

  <main class="wrap">
    <h1 class="title">Himpunan Mahasiswa Teknologi Informasi Politeknik Negeri Tanah Laut</h1>

    {{-- Ganti src dengan logo asli --}}
    <img class="logo" src="{{ asset('images/Logo_hima.png') }}" alt="Logo HIMA-TI Politala" />

    <section class="desc">
      DESKRIPSI MENGENAI PROFIL HIMA-TI POLITALA
    </section>

    <section class="grid" aria-label="Pengurus">
      {{-- Kartu 1 --}}
      <article class="card">
        <div class="photo">GAMBAR
          {{-- contoh jika pakai gambar:
          <img src="{{ asset('images/pengurus-1.jpg') }}" alt="Nama Pengurus 1">
          --}}
        </div>
        <div class="meta">
          <div class="name">Nama</div>
          <div class="role">Jabatan</div>
        </div>
      </article>

      {{-- Kartu 2 --}}
      <article class="card">
        <div class="photo">GAMBAR</div>
        <div class="meta">
          <div class="name">Nama</div>
          <div class="role">Jabatan</div>
        </div>
      </article>

      {{-- Kartu 3 --}}
      <article class="card">
        <div class="photo">GAMBAR</div>
        <div class="meta">
          <div class="name">Nama</div>
          <div class="role">Jabatan</div>
        </div>
      </article>

      {{-- Kartu 4 --}}
      <article class="card">
        <div class="photo">GAMBAR</div>
        <div class="meta">
          <div class="name">Nama</div>
          <div class="role">Jabatan</div>
        </div>
      </article>
    </section>
  </main>
</body>
</html>