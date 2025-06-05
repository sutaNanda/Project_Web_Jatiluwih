@extends('layouts.app')

@section('content')
<style>
    .card-hover {
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* shadow awal */
        border: none;
    }

    .card-hover:hover {
        transform: scale(1.03);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.25), 0 0 15px rgba(255, 255, 255, 0.1); /* glow & shadow besar */
        z-index: 1;
    }
</style>

<div class="container-fluid p-4">
    <h2 class="mb-4">Dashboard Admin</h2>

    <div class="alert alert-info d-flex align-items-center" role="alert">
        <i class="bi bi-info-circle-fill me-2"></i>
        <div>
            Selamat datang kembali, Admin! Berikut adalah ringkasan data terbaru.
        </div>
    </div>

    <div class="row g-3 mb-4">
        <!-- Total Wisata -->
        <div class="col-md-4">
            <a href="{{ url('admin/data-wisata') }}" class="text-decoration-none">
                <div class="card text-white bg-primary shadow-sm h-100 card-hover">
                    <div class="card-body text-center">
                        <i class="bi bi-geo-alt-fill fs-1 mb-2"></i>
                        <h3>{{ $data['total_wisata'] }}</h3>
                        <p class="mb-0 text-white">Total Wisata</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Total Booking -->
        <div class="col-md-4">
            <a href="{{ url('admin/data-booking') }}" class="text-decoration-none">
                <div class="card text-white bg-danger shadow-sm h-100 card-hover">
                    <div class="card-body text-center">
                        <i class="bi bi-calendar-check-fill fs-1 mb-2"></i>
                        <h3>{{ $data['total_booking'] }}</h3>
                        <p class="mb-0 text-white">Total Booking</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Booking Belum Dikonfirmasi -->
        <div class="col-md-4">
            <a href="{{ url('admin/data-booking?filter=belum_dikonfirmasi') }}" class="text-decoration-none">
                <div class="card text-white bg-warning shadow-sm h-100 card-hover">
                    <div class="card-body text-center">
                        <i class="bi bi-exclamation-triangle-fill fs-1 mb-2"></i>
                        <h3>{{ $data['booking_belum_dikonfirmasi'] }}</h3>
                        <p class="mb-0 text-white">Booking Belum Dikonfirmasi</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-light">
            <h5 class="mb-0">Aktivitas Terbaru</h5>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">• 3 wisata baru ditambahkan minggu ini</li>
                <li class="list-group-item">• 5 booking telah dikonfirmasi hari ini</li>
                <li class="list-group-item">• 2 wisata menunggu validasi konten</li>
            </ul>
        </div>
    </div>
</div>
@endsection