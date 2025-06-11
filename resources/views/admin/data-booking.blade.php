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
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Tanggal Booking</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Fahmie</td>
                                    <td>fahmie@email.com</td>
                                    <td>2025-05-10</td>
                                    <td class="text-success fw-semibold text-center">Terkonfirmasi</td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-info d-flex align-items-center gap-1 shadow-sm mx-auto">
                                            <i class="bi bi-eye-fill"></i> <span>Detail</span>
                                        </button>
                                    </td>
                                </tr>

                                {{-- Tambahkan data lain di sini --}}
                                {{-- @foreach ($bookings as $booking) --}}
                                {{-- @endforeach --}}

                                <tr>
                                    <td colspan="6" class="text-center text-muted py-4">Tidak ada data booking ditemukan.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
