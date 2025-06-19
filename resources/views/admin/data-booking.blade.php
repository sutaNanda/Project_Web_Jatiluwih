@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-12">

            <!-- Judul Halaman -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold text-primary">Data Booking</h2>
            </div>

            <!-- Card Tabel -->
            <div class="card border-0 shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Email</th>
                                    <th>Nama</th>
                                    <th>Telepon</th>
                                    <th>Jumlah Orang</th>
                                    <th>Tanggal Kunjungan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                @forelse($reservasis as $index => $item)
                                <tr>
                                    <td style="text-align: center;">{{ $index + 1 }}</td>
                                    <td >{{ $item->email }}</td>
                                    <td >{{ $item->nama }}</td>
                                    <td >{{ $item->telepon }}</td>
                                    <td style="text-align: center;">{{ $item->jumlah_orang }}</td>
                                    <td >{{ $item->tanggal_kunjungan }}</td>
                                    <td style="text-align: center;">
                                        @if ($item->status == '')
                                            <span class="badge bg-warning">Pending</span>
                                        @elseif($item->status == 'Dikonfirmasi')
                                            <span class="badge bg-success">Diterima</span>
                                        @else
                                            <span class="badge bg-danger">Ditolak</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-info d-flex align-items-center gap-1 shadow-sm mx-auto">
                                            <a href="{{ route('data-booking.detail', $item->id) }}"><span>Detail</span></a>
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-4">Tidak ada data booking ditemukan.</td>
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

@endsection
