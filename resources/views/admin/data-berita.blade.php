@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-12">

            <!-- Judul Halaman -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold text-primary">Manajemen Berita</h2>
                <a href="{{ route('data-berita.create') }}" class="btn btn-success shadow-sm">
                    <i class="bi bi-plus-circle me-1"></i> Tambah Berita
                </a>
            </div>

            <!-- Search -->
            <div class="input-group mb-4 shadow-sm">
                <input type="text" class="form-control" id="searchInput" placeholder="Cari berita berdasarkan judul atau deskripsi...">
            </div>

            <!-- Card Tabel -->
            <div class="card shadow-sm border-3">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Deskripsi Singkat</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                @foreach ($beritas as $index => $item)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ Str::limit(strip_tags($item->konten), 100, '...') }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}" class="img-thumbnail" style="width: 100px; height: auto;">
                                    </td>
                                    <td class="text-center align-middle">
                                        <div class="d-flex justify-content-center align-items-center gap-2">
                                            <a href="{{ route('data-berita.edit', $item->id) }}" class="btn btn-sm btn-outline-primary d-flex align-items-center gap-1 shadow-sm">
                                                <i class="bi bi-pencil-fill"></i> <span>Edit</span>
                                            </a>
                                            <form action="{{ route('data-berita.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger d-flex align-items-center gap-1 shadow-sm">
                                                    <i class="bi bi-trash-fill"></i> <span>Hapus</span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                                @endforeach

                                @if ($beritas->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4">Tidak ada data berita ditemukan.</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Search Script -->
<script>
    document.getElementById('searchInput').addEventListener('keyup', function () {
        let filter = this.value.toLowerCase();
        let rows = document.querySelectorAll("#tableBody tr");

        rows.forEach(row => {
            let text = row.innerText.toLowerCase();
            row.style.display = text.includes(filter) ? '' : 'none';
        });
    });
</script>
@endsection
