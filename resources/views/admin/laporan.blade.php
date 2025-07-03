@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h3 class="mb-4">Laporan Data Booking Desa Wisata Jatiluwih</h3>

    <!-- Filter Tanggal -->
    <form class="row g-3 mb-4" method="GET" action="{{ route('admin.laporan') }}">
        <div class="col-md-4">
            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{ request('tanggal_mulai') }}">
        </div>
        <div class="col-md-4">
            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
            <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="{{ request('tanggal_selesai') }}">
        </div>
        <div class="col-md-4 d-flex align-items-end">
           <button type="submit" class="btn w-100 text-white" style="background-color: #41b471;">Tampilkan</button>
        </div>
    </form>

    {{-- ========== Laporan 1 ========== --}}
    <div class="card mb-4" id="laporan_pemesanan">
        <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
            <span>Jumlah Pemesanan per Paket</span>
            <button class="btn btn-light btn-sm" onclick="printSection('laporan_pemesanan')">Cetak</button>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered" id="reportTable1">
                <thead class="table-light">
                    <tr><th>Nama Paket</th><th>Jumlah Pemesanan</th></tr>
                </thead>
                <tbody>
                    @foreach($laporan_pemesanan as $row)
                        <tr><td>{{ $row->nama_paket }}</td><td>{{ $row->total_pemesanan }}</td></tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- ========== Laporan 2 ========== --}}
    <div class="card mb-4" id="laporan_pendapatan">
        <div class="card-header d-flex justify-content-between align-items-center bg-success text-white">
            <span>Total Pendapatan per Paket</span>
            <button class="btn btn-light btn-sm" onclick="printSection('laporan_pendapatan')">Cetak</button>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered" id="reportTable2">
                <thead class="table-light">
                    <tr><th>Nama Paket</th><th>Total Pendapatan</th></tr>
                </thead>
                <tbody>
                    @foreach($laporan_pendapatan as $row)
                        <tr>
                            <td>{{ $row->nama_paket }}</td>
                            <td>Rp {{ number_format($row->total_pendapatan, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- ========== Laporan 3 ========== --}}
    <div class="card mb-4" id="laporan_pembayaran">
        <div class="card-header d-flex justify-content-between align-items-center bg-warning">
            <span>Status Pembayaran</span>
            <button class="btn btn-light btn-sm" onclick="printSection('laporan_pembayaran')">Cetak</button>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered w-50" id="reportTable3">
                <thead class="table-light">
                    <tr><th>Status</th><th>Jumlah Transaksi</th></tr>
                </thead>
                <tbody>
                    @foreach($laporan_status as $status => $jumlah)
                        <tr>
                            <td>{{ ucfirst($status) }}</td>
                            <td>{{ $jumlah }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Script Cetak Per Bagian --}}
<script>
    function printSection(sectionId) {
        var section = document.getElementById(sectionId).cloneNode(true);
        var buttons = section.querySelectorAll("button");
        buttons.forEach(button => button.remove());

        var printWindow = window.open('', '', 'height=800,width=1200');
        printWindow.document.write(`
            <html>
                <head>
                    <title>Cetak Laporan</title>
                    <style>
                        body { font-family: Arial, sans-serif; margin: 20px; }
                        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
                        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
                        h2 { text-align: center; margin-bottom: 10px; }
                    </style>
                </head>
                <body>
                    <h2>Laporan Booking Desa Wisata Jatiluwih</h2>
                    ${section.innerHTML}
                </body>
            </html>
        `);
        printWindow.document.close();
        printWindow.focus();
        printWindow.print();
    }
</script>

@endsection