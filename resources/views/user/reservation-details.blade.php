<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>{{ $title }}</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 to-green-200 md:min-h-screen flex items-center justify-center p-4 text-gray-800">

    <div class="bg-white w-full md:w-full md:max-w-lg rounded-2xl shadow-2xl overflow-hidden border border-green-200 relative">
        <!-- Tiket Notches -->
        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-10 h-10 bg-green-200 rounded-full -translate-x-1/2"></div>
        <div class="absolute right-0 top-1/2 -translate-y-1/2 w-10 h-10 bg-green-200 rounded-full translate-x-1/2"></div>

        <!-- Header -->
        <div class="bg-green-600 text-white p-4 text-center">
            <h1 class="text-2xl font-bold tracking-wide">Tiket Reservasi</h1>
        </div>

        <!-- Body -->
        <div class="p-6 space-y-4 text-sm w-full">
            <div class="grid grid-cols-2 gap-2 border-b border-dashed border-gray-200 pb-4">
                <p><span class="font-medium text-green-700">ID:</span> {{ $reservasi->id }}</p>
                <p><span class="font-medium text-green-700">Tanggal:</span> {{ $reservasi->tanggal_kunjungan }}</p>
                <p><span class="font-medium text-green-700">Nama:</span> {{ $reservasi->nama }}</p>
                <p><span class="font-medium text-green-700">Paket:</span> {{ $reservasi->paket->nama_paket }}</p>
                <p><span class="font-medium text-green-700">Email:</span> {{ $reservasi->email }}</p>
                <p><span class="font-medium text-green-700">Telepon:</span> {{ $reservasi->telepon }}</p>
                <p><span class="font-medium text-green-700">Jumlah:</span> {{ $reservasi->jumlah_orang }}</p>
                <p><span class="font-medium text-green-700">Status:</span> {{ $reservasi->status }}</p>
            </div>
            <div class="pt-4 border-t border-dashed border-gray-200 flex justify-between items-center">
                <p class="text-green-700 font-medium">Total:</p>
                <p class="text-green-600 font-bold text-lg">Rp {{ number_format($reservasi->pembayaran->jumlah, 0, ',', '.') }}</p>
            </div>

            @if($reservasi->catatan)
            <div class="bg-green-50 border border-green-200 p-3 rounded-lg mt-4">
                <p class="text-green-800 font-semibold">Catatan:</p>
                <p class="text-green-800 mt-1">{{ $reservasi->catatan }}</p>
            </div>
            @endif
        </div>

        <!-- Footer -->
        <div class="bg-green-600 text-white text-center p-3 text-sm">
            Terima kasih atas reservasi Anda! 🎟️
        </div>
    </div>

</body>
</html>
