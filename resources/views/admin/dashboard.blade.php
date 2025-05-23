@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
        <!-- Konten Utama -->
        <div class="col-md-10 p-4">
            <h2>Dashboard</h2>
            <div class="card mb-3">
                <div class="card-body">
                    <h4>Selamat datang di halaman admin!</h4>
                    <p>Deskripsi</p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3>{{ $data['total_wisata'] }}</h3>
                            <p>Total Wisata</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3>{{ $data['total_booking'] }}</h3>
                            <p>Total Booking</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3>{{ $data['booking_belum_dikonfirmasi'] }}</h3>
                            <p>Booking Belum Dikonfirmasi</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card p-3">
                <div class="placeholder-glow">
                    <p class="placeholder col-12"></p>
                    <p class="placeholder col-10"></p>
                    <p class="placeholder col-8"></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
