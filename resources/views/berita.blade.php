<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>HMTI TI D3 — Berita</title>
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

  <main class="container news-page">
    <div class="page-header">
      <h1>Berita Terkini</h1>
      <p>Informasi dan kegiatan terbaru seputar HMTI dan dunia teknologi.</p>
    </div>

    <div class="news-layout">
      <section class="featured-news">
        <article class="news-card-featured">
          <div class="news-card-image">
            <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=2832&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Gambar Berita Utama">
          </div>
          <div class="news-card-content">
            <span class="news-card-category">Workshop</span>
            <h2 class="news-card-title"><a href="#">HMTI Sukses Gelar Workshop Pengenalan Artificial Intelligence untuk Mahasiswa</a></h2>
            <p class="news-card-excerpt">Workshop ini bertujuan untuk memperkenalkan konsep dasar AI dan implementasinya dalam berbagai bidang industri, menarik antusiasme tinggi dari para peserta.</p>
            <div class="news-card-meta">
              <span>Admin HMTI</span> | <span>20 September 2025</span>
            </div>
          </div>
        </article>
      </section>

      <aside class="sidebar-news">
        <h3>Berita Lainnya</h3>
        <article class="news-card-sidebar">
          <div class="news-card-image-sidebar">
            <img src="https://images.unsplash.com/photo-1550009158-94ae76552485?q=80&w=2584&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Gambar Berita">
          </div>
          <div class="news-card-content-sidebar">
            <span class="news-card-category">Kompetisi</span>
            <h4 class="news-card-title-sidebar"><a href="#">Mahasiswa TI Politala Raih Juara 2 di Ajang Lomba Coding Nasional</a></h4>
          </div>
        </article>
        <article class="news-card-sidebar">
          <div class="news-card-image-sidebar">
            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Gambar Berita">
          </div>
          <div class="news-card-content-sidebar">
            <span class="news-card-category">Kunjungan</span>
            <h4 class="news-card-title-sidebar"><a href="#">Kunjungan Industri ke Perusahaan Startup Teknologi Terkemuka di Banjarmasin</a></h4>
          </div>
        </article>
        <article class="news-card-sidebar">
          <div class="news-card-image-sidebar">
            <img src="https://images.unsplash.com/photo-1593113646773-028c64a8f1b8?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Gambar Berita">
          </div>
          <div class="news-card-content-sidebar">
            <span class="news-card-category">Pengabdian</span>
            <h4 class="news-card-title-sidebar"><a href="#">Bakti Sosial dan Pengenalan Komputer di Desa Terpencil</a></h4>
          </div>
        </article>
      </aside>
    </div>

    <section class="more-news">
        <h2>Semua Berita</h2>
        <div class="news-grid">
            <article class="news-card">
              <div class="news-card-image">
                <img src="https://images.unsplash.com/photo-1516116216624-53e697fedbea?q=80&w=2728&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Gambar Berita">
              </div>
              <div class="news-card-content">
                <span class="news-card-category">Acara</span>
                <h3 class="news-card-title"><a href="#">Judul Berita Acara atau Kegiatan yang Telah Dilaksanakan</a></h3>
                <p class="news-card-excerpt">Deskripsi singkat mengenai berita ini. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="news-card-meta">
                  <span>Admin HMTI</span> | <span>19 September 2025</span>
                </div>
              </div>
            </article>
            <article class="news-card">
              <div class="news-card-image">
                <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Gambar Berita">
              </div>
              <div class="news-card-content">
                <span class="news-card-category">Prestasi</span>
                <h3 class="news-card-title"><a href="#">Mahasiswa Berprestasi di Bidang Desain UI/UX</a></h3>
                <p class="news-card-excerpt">Deskripsi singkat mengenai berita ini. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="news-card-meta">
                  <span>Admin HMTI</span> | <span>18 September 2025</span>
                </div>
              </div>
            </article>
            <article class="news-card">
              <div class="news-card-image">
                <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Gambar Berita">
              </div>
              <div class="news-card-content">
                <span class="news-card-category">Teknologi</span>
                <h3 class="news-card-title"><a href="#">Pembahasan Mengenai Tren Teknologi Web Terkini</a></h3>
                <p class="news-card-excerpt">Deskripsi singkat mengenai berita ini. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="news-card-meta">
                  <span>Admin HMTI</span> | <span>17 September 2025</span>
                </div>
              </div>
            </article>
        </div>
    </section>

  </main>
</body>
</html>
