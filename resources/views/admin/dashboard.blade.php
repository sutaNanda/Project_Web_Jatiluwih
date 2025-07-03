@extends('layouts.app')

@section('content')
<style>
    .card-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
    }

    .card-hover:hover {
        transform: scale(1.04);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        z-index: 2;
    }

    .icon-circle {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.2);
        margin-bottom: 15px;
    }

    .bg-forest {
        background-color: #2E8B57;
    }

    .bg-sky {
        background-color: #00BFFF;
    }

    .bg-sunset {
        background-color: #FF6347;
    }

    .bg-warning-dark {
        background-color: #d89a00;
    }

    .activity-icon {
        color: #2E8B57;
    }

    .card-header h5 {
        font-weight: 600;
    }
</style>

<div class="container-fluid p-4">
    <h2 class="mb-4 text-success fw-bold">Dashboard Admin Desa Wisata</h2>

    <div class="alert alert-success d-flex align-items-center" role="alert">
        <i class="bi bi-person-circle me-3 fs-3"></i>
        <div>
            Selamat datang kembali, <strong style="text-transform: capitalize;">{{ session('admin_name') }}</strong>! Ini ringkasan aktivitas terbaru di desa wisata.
        </div>
    </div>

    <!-- Info Cards -->
    <div class="row g-4 mb-4">
        <!-- Total Wisata -->
        <div class="col-md-4">
            <a href="{{ url('admin/data-wisata') }}" class="text-decoration-none">
                <div class="card text-white bg-forest card-hover shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="icon-circle">
                            <i class="bi bi-tree-fill fs-3 text-white"></i>
                        </div>
                        <h3>{{ $data['total_wisata'] }}</h3>
                        <p class="mb-0 text-white">Total Tempat Wisata</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Total Booking -->
        <div class="col-md-4">
            <a href="{{ url('admin/data-booking') }}" class="text-decoration-none">
                <div class="card text-white bg-sunset card-hover shadow-sm h-100">
                    <div class="card-body text-center">
                        <div class="icon-circle">
                            <i class="bi bi-calendar-check-fill fs-3 text-white"></i>
                        </div>
                        <h3>{{ $data['total_booking'] }}</h3>
                        <p class="mb-0 text-white">Total Booking</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Laporan -->
        <div class="col-md-4">
            <a href="{{ url('admin/laporan') }}" class="text-decoration-none">
                <div class="card text-white bg-warning-dark card-hover shadow-sm h-100">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                        <div class="icon-circle mb-3">
                            <i class="bi bi-file-earmark-text-fill fs-3 text-white"></i>
                        </div>
                        <p class="mb-0 text-white">Cetak Laporan</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Chart Section -->
    <div class="card shadow-sm mt-4">
        <div class="card-header bg-light">
            <h5 class="mb-0 fw-semibold text-success">Statistik Reservasi Bulanan</h5>
        </div>
        <div class="card-body">
            {{-- {!! \ArielMejiaDev\LarapexCharts\LarapexChart::cdn() !!} --}}
            <div>
                {!! $chart->container() !!}
            </div>
        </div>
    </div>

    {!! $chart->script() !!}
</div>
@endsection
