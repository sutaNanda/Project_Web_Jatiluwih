@extends('layouts.app')

@section('content')
<div class="col-md-8 offset-md-2 mt-5">
    <h2>Edit Berita</h2>

    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Judul Berita</label>
            <input type="text" name="judul" class="form-control" value="{{ $berita->judul }}" required>
        </div>

        <div class="mb-3">
            <label>Konten</label>
            <textarea name="konten" rows="5" class="form-control" required>{{ $berita->konten }}</textarea>
        </div>

        <div class="mb-3">
            <label>Gambar Lama</label><br>
            <img src="{{ asset('gambar/' . $berita->gambar) }}" width="200">
        </div>

        <div class="mb-3">
            <label>Ganti Gambar (opsional)</label>
            <input type="file" name="gambar" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection
