<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('{{ $bg }}');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        .details {
            margin-top: 20px;
        }
        .details p {
            margin: 10px 0;
            font-size: 16px;
        }
        .details strong {
            display: inline-block;
            width: 150px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reservation Details</h1>
        <div class="details">
            <p><strong>Reservation ID:</strong> {{ $reservasi->id }}</p>
            <p><strong>Name:</strong> {{ $reservasi->nama }}</p>
            <p><strong>Email:</strong> {{ $reservasi->email }}</p>
            <p><strong>Phone:</strong> {{ $reservasi->telepon }}</p>
            <p><strong>Package:</strong> {{ $reservasi->paket->nama }}</p>
            <p><strong>Visit Date:</strong> {{ $reservasi->tanggal_kunjungan }}</p>
            <p><strong>Number of People:</strong> {{ $reservasi->jumlah_orang }}</p>
            <p><strong>Total Amount:</strong> Rp {{ number_format($reservasi->pembayaran->jumlah, 0, ',', '.') }}</p>
            <p><strong>Status:</strong> {{ $reservasi->status }}</p>
            @if($reservasi->catatan)
                <p><strong>Notes:</strong> {{ $reservasi->catatan }}</p>
            @endif
        </div>
    </div>
</body>
</html>