<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reservasi Berhasil</title>
</head>
<body>
    <h2>Hai {{ $reservasi->nama }},</h2>
    <p>Terima kasih telah melakukan reservasi pada paket:</p>
    <ul>
        <li><strong>{{ $reservasi->paket->nama_paket }}</strong></li>
        <li>Tanggal Kunjungan: {{ $reservasi->tanggal_kunjungan }}</li>
        <li>Jumlah Orang: {{ $reservasi->jumlah_orang }}</li>
    </ul>

    <p>QR Code telah terlampir dalam email ini sebagai file <code>reservation-qrcode.svg</code>. Silakan tunjukkan saat check-in.</p>

    <p>Salam hangat,<br>Tim Jatiluwih</p>
</body>
</html>
