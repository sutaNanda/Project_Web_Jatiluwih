@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="mb-4">
        <h2 class="fw-bold text-primary">Detail Booking</h2>
        <p class="text-muted">Informasi lengkap mengenai reservasi wisata</p>
    </div>

    <div class="card border-0 shadow-lg rounded-4">
        <div class="card-body p-4">
            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>Nama:</strong> {{ $booking->nama }}</p>
                    <p><strong>Email:</strong> {{ $booking->email }}</p>
                    <p><strong>Telepon:</strong> {{ $booking->telepon }}</p>
                    <p><strong>Paket:</strong> {{ $booking->paket_id ? $booking->paket->nama_paket : '-' }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Jumlah Orang:</strong> {{ $booking->jumlah_orang }}</p>
                    <p><strong>Tanggal Kunjungan:</strong> {{ \Carbon\Carbon::parse($booking->tanggal_kunjungan)->format('d M Y') }}</p>
                    <p><strong>Catatan:</strong> {{ $booking->catatan ?: '-' }}</p>
                </div>
            </div>

            <p>
                <strong>Status:</strong> 
                @if($booking->status === 'Dikonfirmasi')
                    <span class="badge bg-success">Dikonfirmasi</span>
                @elseif($booking->status === 'Ditolak')
                    <span class="badge bg-danger">Ditolak</span>
                @else
                    <span class="badge bg-warning text-dark">Belum Dikonfirmasi</span>
                @endif
            </p>

            <div class="mt-4 d-flex gap-3 flex-wrap">
                @if($booking->status !== 'Dikonfirmasi')
                    <form action="{{ route('booking.konfirmasi', $booking->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle me-1"></i> Konfirmasi
                        </button>
                    </form>
                @endif

                @if($booking->status !== 'Ditolak')
                    <form action="{{ route('booking.tolak', $booking->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-x-circle me-1"></i> Tolak
                        </button>
                    </form>
                @endif

                <a href="{{ route('admin.data-booking') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left me-1"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
