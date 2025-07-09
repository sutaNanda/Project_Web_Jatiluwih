@extends('layouts.app')

@section('content')
<div class="py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="text-black text-center">
                    <h4 class="mb-0">Form Tambah Destinasi</h4>
                </div>
                <div class=" p-4">
                    <form action="{{ route('data-wisata.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="nama_destinasi" class="form-label">Nama Destinasi</label>
                            <input type="text" id="nama_destinasi" name="nama_destinasi" class="form-control" required placeholder="Masukkan nama destinasi">
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" class="form-control" rows="4" required placeholder="Masukkan deskripsi"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="gambar" class="form-label">Upload Gambar</label>
                            <input type="file" id="gambar" name="gambar" class="form-control">
                        </div>

                        <div class="mb-4">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" name="status" class="form-select">
                                <option value="aktif">Aktif</option>
                                <option value="tidak_aktif">Tidak Aktif</option>
                            </select>
                        </div>

                        <!-- Tombol di sisi kiri -->
                        <div class="d-flex justify-content-start gap-2">
                            <a href="{{ url('/admin/data-wisata') }}" class="btn btn-secondary btn-sm">Kembali</a>
                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection