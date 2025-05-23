@extends('layouts.app')

@section('content')
    <!-- Konten Utama -->
    <div class="col-md-10 p-4">
        <h1 class="mb-4">Data Wisata</h1>

        <div class="mb-3">
            <input type="text" class="form-control" id="searchInput" placeholder="Cari wisata...">
        </div>

        <div class="btn bg-success btn-sm">
            <a href="/create" class="text-white style-non">Tambah Destinasi</a>
        </div>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Wisata</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($destinasi as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->nama_destinasi }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td><img src="{{ asset('gambar/' . $item->gambar) }}" alt="{{ $item->nama_destinasi }}" style="width: 100px"></td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm">Detail</a>
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data destinasi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>
@endsection

@section('scripts')
<script>
    // Pencarian Data Wisata
    document.getElementById('searchInput').addEventListener('input', function(event) {
        const searchQuery = event.target.value.toLowerCase();
        const rows = document.querySelectorAll('#wisataTableBody tr');
        rows.forEach(row => {
            const name = row.cells[1].textContent.toLowerCase();
            const location = row.cells[2].textContent.toLowerCase();
            const category = row.cells[3].textContent.toLowerCase();
            if (name.includes(searchQuery) || location.includes(searchQuery) || category.includes(searchQuery)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
@endsection
