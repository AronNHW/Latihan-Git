@extends('layouts.admin')

@section('title', 'Detail Berita')

@section('content')
<header class="main-header">
  <h1>Detail Berita</h1>
  <a href="{{ route('news.manage') }}" class="btn btn-primary">Kembali</a>
</header>

<section class="aspirasi-table">
    <div class="form-group">
        <strong>Judul:</strong>
        <p>{{ $news->title }}</p>
    </div>
    <div class="form-group">
        <strong>Konten:</strong>
        <p>{!! nl2br(e($news->content)) !!}</p>
    </div>
    <div class="form-group">
        <strong>Gambar:</strong>
        @if ($news->image)
            <img src="{{ Storage::url($news->image) }}" alt="" class="img-fluid mt-2" width="300px">
        @else
            <p>Tidak ada gambar.</p>
        @endif
    </div>
</section>
@endsection
