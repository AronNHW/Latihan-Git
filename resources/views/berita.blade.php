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
        <img class="brand-logo" src="{{ asset('images/Logo_hima.png') }}" alt="Logo HMTI POLITALA">
      </div>

      <nav class="menu" aria-label="Halaman">
        <a href="{{ url('/') }}">HOME</a>
        <a href="{{ url('divisi') }}">DIVISI</a>
        <a href="{{ url('profil') }}">PROFIL</a>
        <a href="{{ route('berita.public') }}" class="active">BERITA</a>
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
        @if ($featured)
        <article class="news-card-featured">
          <div class="news-card-image">
            <img src="{{ $featured->image ? Storage::url($featured->image) : asset('images/placeholder.png') }}" alt="Gambar Berita Utama">
          </div>
          <div class="news-card-content">
            <span class="news-card-category">{{ $featured->category ?? 'Umum' }}</span>
            <h2 class="news-card-title"><a href="#">{{ $featured->title }}</a></h2>
            <p class="news-card-excerpt">{{ $featured->content }}</p>
            <div class="news-card-meta">
              <span>Admin HMTI</span> | <span>{{ $featured->created_at->format('d M Y') }}</span>
            </div>
          </div>
        </article>
        @endif
      </section>


    </div>

    <section class="more-news">
        <h2>Semua Berita</h2>
        <div class="news-grid">
            @forelse ($all as $post)
            <article class="news-card">
              <div class="news-card-image">
                <img src="{{ $post->image ? Storage::url($post->image) : asset('images/placeholder.png') }}" alt="Gambar Berita">
              </div>
              <div class="news-card-content">
                <span class="news-card-category">{{ $post->category ?? 'Umum' }}</span>
                <h3 class="news-card-title"><a href="#">{{ $post->title }}</a></h3>
                <p class="news-card-excerpt">{{ Str::limit($post->content, 100) }}</p>
                <div class="news-card-meta">
                  <span>Admin HMTI</span> | <span>{{ $post->created_at->format('d M Y') }}</span>
                </div>
              </article>
            @empty
            <div class="col">
                <p class="text-center">Tidak ada berita untuk ditampilkan saat ini.</p>
            </div>
            @endforelse
        </div>
        <div class="mt-5">
            {{ $all->links() }}
        </div>
    </section>

  </main>
</body>
</html>