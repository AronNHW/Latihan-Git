@extends('layouts.admin')

@section('title', 'Manajemen Berita')

@section('content')
<header class="main-header">
  <h1>Manajemen Berita</h1>
  <a href="{{ route('news.create') }}" class="btn btn-success">+ Tambah Berita Baru</a>
</header>

@if (session('success'))
  <div class="alert alert-success" style="background-color: #dcfce7; color: #166534; padding: 16px; border-radius: 8px; margin-bottom: 24px;">
    {{ session('success') }}
  </div>
@endif

<section class="aspirasi-table">
  <table>
    <thead>
      <tr>
        <th style="width: 5%;">No</th>
        <th>Judul</th>
        <th style="width: 35%;">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($news as $item)
        <tr>
          <td>{{ $news->firstItem() + $loop->index }}</td>
          <td>{{ $item->title }}</td>
          <td>
            <form action="{{ route('news.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus berita ini?');">
              <a href="{{ route('news.show', $item->id) }}" class="btn btn-success btn-sm">Lihat</a>
              <a href="{{ route('news.edit', $item->id) }}" class="btn btn-info btn-sm">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn-danger btn-sm">Hapus</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="3" class="text-center">Tidak ada berita.</td>
        </tr>
      @endforelse
    </tbody>
  </table>
  <div style="margin-top: 20px;">
    {{ $news->links() }}
  </div>
</section>
@endsection