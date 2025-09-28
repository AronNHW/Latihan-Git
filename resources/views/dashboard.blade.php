<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard Pengurus - HMTI</title>
  {{-- Vite will automatically handle the CSS link --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="dashboard-body">

  <aside class="sidebar">
    <div class="sidebar-header">
      {{-- Use asset helper for images, assuming it's in public/images --}}
      <img src="{{ asset('images/Logo_hima.png') }}" alt="Logo HMTI" class="sidebar-logo">
      <span class="sidebar-title">HMTI POLITALA</span>
    </div>
    <nav class="sidebar-nav">
      {{-- Use route() helper for links if routes are named --}}
      <a href="#" class="nav-item active">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="nav-icon"><path d="M4 13h6v-2H4v2zm0 4h6v-2H4v2zm0-8h6V7H4v2zm8 2h12V7H12v2zm0 4h12v-2H12v2zm0 4h12v-2H12v2z"></path></svg>
        <span>Dashboard</span>
      </a>
      <a href="{{ route('aspirations.index') }}" class="nav-item">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="nav-icon"><path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"></path></svg>
        <span>Aspirasi Masuk</span>
      </a>
      <a href="{{ route('news.manage') }}" class="nav-item">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="nav-icon"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"></path></svg>
        <span>Manajemen Berita</span>
      </a>
      <a href="#" class="nav-item">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="nav-icon"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path></svg>
        <span>Data Pendaftar</span>
      </a>
      <a href="#" class="nav-item">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="nav-icon"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
        <span>Prestasi Mahasiswa</span>
      </a>
      <a href="#" class="nav-item">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="nav-icon"><path d="M12 3L2 12h3v8h14v-8h3L12 3zm5 15h-2v-6h-2v6H9v-6H7v6H5v-8.59l7-7 7 7V18z"></path></svg>
        <span>Manajemen Divisi</span>
      </a>
      <a href="#" class="nav-item">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="nav-icon"><path d="M10 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2h-8l-2-2z"></path></svg>
        <span>Profil Himpunan</span>
      </a>
    </nav>
    <div class="sidebar-footer">
      <a href="#" class="nav-item">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="nav-icon"><path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"></path></svg>
        <span>Logout</span>
      </a>
    </div>
  </aside>

  <main class="main-content">
    <header class="main-header">
      <h1>Dashboard Pengurus</h1>
      <div class="user-profile dropdown">
        <button class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">
          {{-- Use a variable for the user's name --}}
          <span>Selamat datang, {{ $userName ?? '[Nama Pengurus]' }}</span>
          <img src="{{ asset('images/profile.jpg') }}" alt="Foto Profil" class="profile-pic">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="dropdown-caret"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="dropdown-menu">
          <a href="#" class="dropdown-item">Profil Saya</a>
          <a href="#" class="dropdown-item">Pengaturan</a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">Logout</a>
        </div>
      </div>
    </header>

    <section class="dashboard-stats">
      <div class="stat-card">
        <h3>Aspirasi Baru</h3>
        <p class="stat-number">0</p>
        <a href="#">Lihat Detail</a>
      </div>
      <div class="stat-card">
        <h3>Pendaftar Baru</h3>
        <p class="stat-number">0</p>
        <a href="#">Lihat Detail</a>
      </div>
      <div class="stat-card">
        <h3>Total Berita</h3>
        <p class="stat-number">0</p>
        <a href="#">Lihat Detail</a>
      </div>
      <div class="stat-card">
        <h3>Jumlah Anggota</h3>
        <p class="stat-number">0</p>
        <a href="#">Lihat Detail</a>
      </div>
    </section>

    <section class="recent-activity">
      <h2>Aktivitas Terbaru</h2>
      <ul>
        <li><strong>[Nama]</strong> mengirimkan aspirasi baru.</li>
        <li>Artikel <strong>"Workshop IoT"</strong> telah dipublikasikan.</li>
        <li><strong>[Nama]</strong> mendaftar sebagai anggota baru.</li>
        <li>Data prestasi mahasiswa telah diperbarui.</li>
      </ul>
    </section>
  </main>

  <script>
    // This script is for the dropdown functionality
    document.addEventListener('DOMContentLoaded', function () {
      const dropdownToggle = document.querySelector('.dropdown-toggle');
      const dropdownMenu = document.querySelector('.dropdown-menu');

      if (dropdownToggle) {
        dropdownToggle.addEventListener('click', function (event) {
          event.stopPropagation();
          dropdownMenu.classList.toggle('show');
          const isExpanded = dropdownMenu.classList.contains('show');
          dropdownToggle.setAttribute('aria-expanded', isExpanded);
        });
      }

      document.addEventListener('click', function (event) {
        if (dropdownMenu && dropdownMenu.classList.contains('show') && !dropdownToggle.contains(event.target)) {
          dropdownMenu.classList.remove('show');
          dropdownToggle.setAttribute('aria-expanded', 'false');
        }
      });
    });
  </script>

</body>
</html>