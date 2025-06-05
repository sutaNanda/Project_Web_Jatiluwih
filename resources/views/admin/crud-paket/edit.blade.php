@extends('layouts.app')

@section('content')
<div class="col-md-10 p-4">
    <h1 class="mb-4">Edit Paket Wisata</h1>
    <form action="{{ route('data-paket-wisata.update', $paket->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_paket" class="form-label">Nama Paket</label>
            <input type="text" class="form-control" id="nama_paket" name="nama_paket" value="{{ $paket->nama_paket }}" required>
        </div>
        <div class="mb-3">
            <label for="destinasi_id" class="form-label">Destinasi</label>
            <select class="form-control" id="destinasi_id" name="destinasi_id" required>
                <option value="">Pilih Destinasi</option>
                @foreach($destinasi as $d)
                    <option value="{{ $d->id }}" {{ $paket->destinasi_id == $d->id ? 'selected' : '' }}>{{ $d->nama_destinasi }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
            <img src="{{ asset('storage/' . $paket->gambar) }}" alt="{{ $paket->nama_paket }}" style="width: 100px; margin-top: 10px;">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $paket->harga }}" required>
        </div>
        <div class="mb-3">
            <label for="fasilitas" class="form-label">Fasilitas</label>
            <textarea class="form-control" id="fasilitas" name="fasilitas" required>{{ $paket->fasilitas }}</textarea>
        </div>
        <div class="mb-3">
            <label for="durasi" class="form-label">Durasi</label>
            <input type="text" class="form-control" id="durasi" name="durasi" value="{{ $paket->durasi }}" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="populer" name="populer" value="1" {{ $paket->populer ? 'checked' : '' }}>
            <label class="form-check-label" for="populer">Populer</label>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('data-paket-wisata.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection