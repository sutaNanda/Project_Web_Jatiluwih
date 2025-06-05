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
    <a href="{{ route('data-berita.create') }}" class="btn btn-success btn-sm text-white mb-3">
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
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($beritas as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{Str::limit($item->konten, 100)}}</td>
                <td>
                    <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}" style="max-width: 100%;">
                </td>
                <td>
                    <a href="{{ route('data-berita.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('data-berita.destroy', $item->id) }}" method="POST" class="mt-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach

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
