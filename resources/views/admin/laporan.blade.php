@extends('layouts.app')

@section('content')
    <!-- Konten Utama -->
    <div class="col-md-10 p-4">
        <h3 class="mb-4">Laporan Data Booking</h3>

        <!-- Filter Tanggal -->
        <form class="row g-3 mb-4">
            <div class="col-md-4">
                <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai">
            </div>
            <div class="col-md-4">
                <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai">
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-primary w-100">Tampilkan</button>
            </div>
        </form>

        <!-- Tabel Laporan -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="reportTable">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama Pengunjung</th>
                        <th>Email</th>
                        <th>Tanggal Booking</th>
                        <th>Jumlah Orang</th>
                        <th>Total Bayar</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Contoh Data --}}
                    <tr>
                        <td>1</td>
                        <td>Fahmie</td>
                        <td>fahmie@email.com</td>
                        <td>10 Mei 2025</td>
                        <td>4</td>
                        <td>Rp 400.000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sari</td>
                        <td>sari@email.com</td>
                        <td>11 Mei 2025</td>
                        <td>2</td>
                        <td>Rp 200.000</td>
                    </tr>
                    {{-- Tambahkan data dinamis di sini --}}
                </tbody>
            </table>
        </div>

        <button class="btn btn-danger mt-3" onclick="printReport()">
            Cetak
        </button>
    </div>
</div>

<script>
    function printReport() {
        var printContent = document.getElementById('reportTable').outerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContent;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection
