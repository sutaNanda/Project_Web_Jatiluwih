@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Tambah Paket Wisata</h2>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Periksa kembali inputan Anda:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('data-paket-wisata.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nama_paket" class="form-label">Nama Paket</label>
            <input type="text" name="nama_paket" placeholder="Contoh: Paket A" class="form-control" id="nama_paket" value="{{ old('nama_paket') }}" required>
        </div>

        <div class="mb-3">
            <label for="destinasi_id" class="form-label">Destinasi</label>
            <select name="destinasi_id" class="form-select" id="destinasi_id" required>
                <option value="">-- Pilih Destinasi --</option>
                @foreach ($destinasi as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_destinasi }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Paket</label>
            <input type="file" name="gambar" class="form-control" id="gambar" accept="image/*" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" placeholder="Contoh: 100000" class="form-control" id="harga" value="{{ old('harga') }}" required>
        </div>

        <div class="mb-3">
            <label for="durasi" class="form-label">Durasi</label>
            <input type="text" name="durasi" class="form-control" id="durasi" value="{{ old('durasi') }}" placeholder="Contoh: 3 Hari 2 Malam" required>
        </div>

        <div class="mb-3">
            <label for="fasilitas" class="form-label">Fasilitas</label>
            <textarea name="fasilitas" class="form-control" placeholder="Contoh: - Fasilitas A, Fasilitas B" id="fasilitas" rows="4" required>{{ old('fasilitas') }}</textarea>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="populer" class="form-check-input" id="populer">
            <label class="form-check-label" for="populer">Tandai sebagai Paket Populer</label>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('data-paket-wisata.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
