@extends('layouts.app')

@section('content')
<!-- Konten Utama -->
<div class="col-md-10 p-4">
    <h1 class="mb-4">Data Paket Wisata</h1>

    <div class="mb-3">
        <input type="text" class="form-control" id="searchInput" placeholder="Cari paket wisata...">
    </div>

    <a href="{{ route('data-paket-wisata.create') }}" class="btn btn-success btn-sm text-white mb-3">
        Tambah Paket
    </a>

    <table class="table table-striped table-bordered">
        <thead>
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
        <tbody id="paketTableBody">
            @forelse($paket as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama_paket }}</td>
                    <td>{{ $item->destinasi->nama_destinasi ?? 'Tidak diketahui' }}</td>
                    <td>
                        <img src="{{ asset('gambar/' . $item->gambar) }}" alt="{{ $item->nama_destinasi }}" style="width: 100px">
                    </td>
                    <td>Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td>{{ $item->fasilitas }}</td>
                    <td>{{ $item->durasi }}</td>
                    <td>{{ $item->populer ? 'Ya' : 'Tidak' }}</td>
                    <td>
                        <a href="{{ route('data-paket-wisata.edit', $item->id) }}" class="btn btn-info btn-sm">Edit</a>
                        <form action="{{ route('data-paket-wisata.destroy', $item->id) }}" method="POST" class="mt-2">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">Tidak ada data paket wisata.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('searchInput').addEventListener('input', function(event) {
        const searchQuery = event.target.value.toLowerCase();
        const rows = document.querySelectorAll('#paketTableBody tr');
        rows.forEach(row => {
            const namaPaket = row.cells[1].textContent.toLowerCase();
            const namaDestinasi = row.cells[2].textContent.toLowerCase();
            const fasilitas = row.cells[5].textContent.toLowerCase();
            if (
                namaPaket.includes(searchQuery) ||
                namaDestinasi.includes(searchQuery) ||
                fasilitas.includes(searchQuery)
            ) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>
@endsection