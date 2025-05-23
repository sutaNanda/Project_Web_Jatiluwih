@extends('layouts.app')

@section('content')
<style>
    .booking-container {
        background: #fff;
        padding: 24px;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        font-family: sans-serif;
        margin: 20px;
    }

    .breadcrumb {
        font-size: 14px;
        color: #555;
        margin-bottom: 16px;
    }

    .breadcrumb a {
        color: #007BFF;
        text-decoration: none;
    }

    .breadcrumb a:hover {
        text-decoration: underline;
    }

    h1 {
        font-size: 24px;
        color: #333;
        margin-bottom: 8px;
    }

    .description {
        color: #666;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    table thead {
        background-color: #f5f5f5;
    }

    table th, table td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: left;
    }

    table tbody tr:hover {
        background-color: #f9f9f9;
    }

    .status-confirmed {
        color: green;
        font-weight: bold;
    }

    .btn-detail {
        background-color: #007BFF;
        color: white;
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    }

    .btn-detail:hover {
        background-color: #0056b3;
    }

    .mb-4 {
        font-size: 40px;
    }
</style>

    <!-- konten utama -->
    <div class="col-md-10 p-4">
        <h1 class="mb-4">Data Booking</h1>
            <p class="description">Berikut adalah daftar data booking yang tersedia.</p>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Tanggal Booking</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Fahmie</td>
                        <td>fahmie@email.com</td>
                        <td>2025-05-10</td>
                        <td class="status-confirmed">Terkonfirmasi</td>
                        <td><button class="btn-detail">Detail</button></td>
                    </tr>
                    <!-- Tambah baris lain jika diperlukan -->
                </tbody>
            </table>
    </div>
</div>
@endsection
