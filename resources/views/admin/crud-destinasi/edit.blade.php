@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="">
        <div class="card-header text-black mb-2">
            <h4 class="mb-0 text-center p-3">Edit Destinasi Wisata</h4>
        </div>
        <div class="card-body">

            {{-- Menampilkan error validasi --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('data-wisata.update', $destinasi->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_destinasi" class="form-label">Nama Destinasi</label>
                    <input type="text" name="nama_destinasi" id="nama_destinasi"
                        value="{{ old('nama_destinasi', $destinasi->nama_destinasi) }}"
                        class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control"
                        required>{{ old('deskripsi', $destinasi->deskripsi) }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gambar Saat Ini</label><br>
                    <img src="{{ asset('gambar/' . $destinasi->gambar) }}" alt="{{ $destinasi->nama_destinasi }}"
                        class="img-thumbnail" width="150">
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Ganti Gambar (Opsional)</label>
                    <input type="file" name="gambar" id="gambar" accept="image/*" class="form-control" style="width: 300px">
                </div>

                <div class="mb-4">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select" style="width: 100px" required>
                        <option value="aktif" {{ $destinasi->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="nonaktif" {{ $destinasi->status == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                    </select>
                </div>

                <div class="d-flex">
                    <a href="{{ route('data-wisata.index') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary" style="margin-left:10px ">Simpan Perubahan</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
