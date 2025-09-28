<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Manajemen Berita - HMTI</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    .news-table-container {
      background-color: #ffffff;
      padding: 24px;
      border-radius: 16px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.06);
      overflow-x: auto;
    }
    .news-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 16px;
    }
    .news-table th,
    .news-table td {
      padding: 12px 16px;
      text-align: left;
      border-bottom: 1px solid #eef2ff;
      vertical-align: middle;
    }
    .news-table th {
      background-color: #f8fafc;
      font-weight: 700;
      font-size: 14px;
      color: #475569;
      text-transform: uppercase;
    }
    .news-table tbody tr:hover {
      background-color: #f1f5f9;
    }
    .news-table .description-cell {
      max-width: 300px; /* Adjust as needed */
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .action-buttons {
      display: flex;
      gap: 8px;
      align-items: center;
    }
    .btn-edit, .btn-delete {
      padding: 6px 12px;
      border-radius: 8px;
      border: none;
      font-weight: 600;
      font-size: 14px;
      cursor: pointer;
      transition: background-color .2s ease;
      text-decoration: none;
      color: white;
    }
    .btn-edit {
      background-color: #3b82f6; /* blue-500 */
    }
    .btn-edit:hover {
      background-color: #2563eb; /* blue-600 */
    }
    .btn-delete {
      background-color: #ef4444; /* red-500 */
    }
    .btn-delete:hover {
      background-color: #dc2626; /* red-600 */
    }
    .btn-create {
      background-color: #10b981; /* green-500 */
      color: white;
      padding: 10px 16px;
      border-radius: 8px;
      border: none;
      font-weight: 600;
      font-size: 16px;
      cursor: pointer;
      transition: background-color .2s ease;
      text-decoration: none;
      display: inline-block;
      margin-bottom: 24px;
    }
    .btn-create:hover {
      background-color: #059669; /* green-600 */
    }
  </style>
</head>
<body class="dashboard-body">

  <aside class="sidebar">
    <div class="sidebar-header">
      <img src="{{ asset('images/Logo_hima.png') }}" alt="Logo HMTI" class="sidebar-logo">
      <span class="sidebar-title">HMTI POLITALA</span>
    </div>
    <nav class="sidebar-nav">
      <a href="{{ route('dashboard') }}" class="nav-item">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="nav-icon"><path d="M4 13h6v-2H4v2zm0 4h6v-2H4v2zm0-8h6V7H4v2zm8 2h12V7H12v2zm0 4h12v-2H12v2zm0 4h12v-2H12v2z"></path></svg>
        <span>Dashboard</span>
      </a>
      <a href="{{ route('aspirations.index') }}" class="nav-item">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="nav-icon"><path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"></path></svg>
        <span>Aspirasi Masuk</span>
      </a>
      <a href="{{ route('manajemen-berita') }}" class="nav-item active">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="nav-icon"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"></path></svg>
        <span>Manajemen Berita</span>
      </a>
      {{-- ... other menu items ... --}}
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
      <h1>Manajemen Berita</h1>
      <div class="user-profile dropdown">
        <button class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">
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

    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <a href="#" class="btn-create">+ Tambah Berita Baru</a>

    <section class="news-table-container">
      <table class="news-table">
        <thead>
          <tr>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Tanggal</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          {{-- Example row --}}
          <tr>
            <td><img src="{{ asset('images/placeholder.png') }}" alt="Gambar Berita" width="100"></td>
            <td>Judul Berita Contoh</td>
            <td class="description-cell" title="Ini adalah deskripsi singkat dari berita.">Ini adalah deskripsi singkat dari berita.</td>
            <td>25-09-2025</td>
            <td>
              <div class="action-buttons">
                <a href="#" class="btn-edit">Edit</a>
                <form action="#" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus berita ini?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn-delete">Hapus</button>
                </form>
              </div>
            </td>
          </tr>
          {{-- Add more rows dynamically with @forelse --}}
          <tr>
            <td colspan="5" style="text-align: center; padding: 40px;">Tidak ada berita yang tersedia.</td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>

  <script>
    // Dropdown functionality
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