@extends('layouts.admin')

@section('title', 'Tambah Berita Baru')

@section('content')
<header class="main-header">
  <h1>Tambah Berita Baru</h1>
  <a href="{{ route('news.manage') }}" class="btn btn-primary">Kembali</a>
</header>

<section class="aspirasi-table">
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada beberapa masalah dengan input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <strong>Judul:</strong>
            <input type="text" name="title" class="form-control" placeholder="Masukkan judul berita">
        </div>
        <div class="form-group">
            <strong>Konten:</strong>
            <textarea class="form-control" style="height:200px" name="content" placeholder="Masukkan isi berita"></textarea>
        </div>
        <div class="form-group">
            <strong>Gambar:</strong>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-info">Simpan</button>
        </div>
    </form>
</section>
@endsection
