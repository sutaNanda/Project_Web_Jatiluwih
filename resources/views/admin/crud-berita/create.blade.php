@extends('layouts.app')

@section('content')
<div class="col-md-8 offset-md-2 mt-5">
    <h2>Tambah Berita</h2>

    <form action="{{ route('data-berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Judul Berita</label>
            <input type="text" name="judul" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Konten</label>
            <textarea name="konten" rows="5" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Destinasi Terkait (Opsional)</label>
            <select name="destinasi_id" class="form-control">
                <option value="">-- Pilih Destinasi (boleh kosong) --</option>
                @foreach($destinasi as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_destinasi }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
