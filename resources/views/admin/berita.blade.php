@extends('layouts.app')

@section('content')
<!-- Konten Utama -->
<div class="col-md-10 p-4">
    <h1 class="mb-4">Data Berita</h1>

    <!-- Input Pencarian -->
    <div class="mb-3">
        <input type="text" class="form-control" id="searchInput" placeholder="Cari berita...">
    </div>

    <!-- Tombol Tambah Berita -->
    <a href="/create" class="btn btn-success btn-sm text-white mb-3">
        Tambah Berita
    </a>

    <!-- Tabel Data -->
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Berita</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Contoh Baris Data -->
            <tr>
                <td>1</td>
                <td>Air Terjun Yeh Hoo</td>
                <td>
                    Air Terjun Yeh Hoo adalah salah satu permata tersembunyi di Jatiluwih, Bali. Terletak tidak jauh dari pusat desa, air terjun ini menyuguhkan suasana sejuk dan damai...
                </td>
                <td>
                    <img src="{{ asset('img/img-1.jpg') }}" width="100">
                </td>
                <td>aktif</td>
                <td>
                    <a href="/berita/1/edit" class="btn btn-primary btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <!-- Tambahkan baris lain di sini jika perlu -->
        </tbody>
    </table>
</div>

<!-- JavaScript Pencarian -->
<script>
    document.getElementById('searchInput').addEventListener('keyup', function () {
        let filter = this.value.toLowerCase();
        let rows = document.querySelectorAll("table tbody tr");

        rows.forEach(row => {
            let text = row.innerText.toLowerCase();
            row.style.display = text.includes(filter) ? '' : 'none';
        });
    });
</script>
@endsection
