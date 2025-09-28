<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>KOTAK ASPIRASI</title>
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
    <main class="container">
    <div class="contact-form-container">
      <div class="contact-header">
        <h1>Kotak Aspirasi</h1>
        <p>Sampaikan aspirasi, kritik, dan saran Anda untuk HMTI yang lebih baik.</p>
      </div>
      <form action="{{ route('aspirations.store') }}" method="POST" class="contact-form">
        @csrf
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text" id="nama" name="nama_pengirim" placeholder="Masukkan nama lengkap Anda" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email_pengirim" placeholder="Masukkan email Anda" required>
        </div>
        <div class="form-group">
          <label for="perihal">Perihal</label>
          <input type="text" id="perihal" name="subjek" placeholder="Subjek atau topik aspirasi Anda" required>
        </div>
        <div class="form-group">
          <label for="aspirasi">Aspirasi Anda</label>
          <textarea id="aspirasi" name="pesan" rows="6" placeholder="Tuliskan aspirasi, kritik, atau saran Anda di sini..." required></textarea>
        </div>
        <button type="submit" class="submit-btn">Kirim Aspirasi</button>
      </form>
    </div>
  </main>
</body>
</html>