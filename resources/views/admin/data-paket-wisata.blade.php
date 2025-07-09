@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-12">

            <!-- Judul Halaman -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold text-primary">Data Paket Wisata</h2>
                <a href="{{ route('data-paket-wisata.create') }}" class="btn btn-success shadow-sm">
                    <i class="bi bi-plus-circle me-1"></i> Tambah Paket
                </a>
            </div>

            <!-- Pencarian -->
            <div class="input-group mb-4 shadow-sm">
                <input type="text" class="form-control" id="searchInput" placeholder="Cari paket wisata...">
            </div>

            <!-- Tabel -->
            <div class="card border-3 shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Paket</th>
                                    <th>Nama Destinasi</th>
                                    <th>Gambar</th>
                                    <th>Harga</th>
                                    <th>Fasilitas</th>
                                    <th>Durasi</th>
                                    <th>Populer</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                @forelse($paket as $index => $item)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td>{{ $item->nama_paket }}</td>
                                        <td>{{ $item->destinasi->nama_destinasi ?? 'Tidak diketahui' }}</td>
                                        <td class="text-center">
                                            <img src="{{ asset('gambar/' . $item->gambar) }}" alt="{{ $item->nama_destinasi }}" class="img-thumbnail" style="width: 100px;">
                                        </td>
                                        <td>Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                                        <td>{{Str::limit($item->fasilitas, 20, '...') ?? 'Tidak diketahui' }}</td>
                                        <td>{{ $item->durasi }}</td>
                                        <td>{{ $item->populer ? 'Ya' : 'Tidak' }}</td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="{{ route('data-paket-wisata.edit', $item->id) }}" class="btn btn-sm btn-outline-primary d-flex align-items-center gap-1 shadow-sm">
                                                    <i class="bi bi-pencil-fill"></i> <span>Edit</span>
                                                </a>
                                                <form action="{{ route('data-paket-wisata.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger d-flex align-items-center gap-1 shadow-sm">
                                                        <i class="bi bi-trash-fill"></i> <span>Hapus</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center text-muted py-4">Tidak ada data paket wisata.</td>
                                    </tr>
                                @endforelse
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

