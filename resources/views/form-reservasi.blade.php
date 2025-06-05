<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservasi - Desa Wisata Jatiluwih</title>

    
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link rel="icon" href="{{ asset('img/logo-1.ico') }}" type=".Image/x-icons">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>
<body>

    <x-navbar></x-navbar>

    <section class="w-full h-screen flex items-center justify-center text-white"
         style="background-image: url('{{ asset('gambar/' . $paket->gambar) }}'); background-size: cover; background-position: center;">
    <div class=" bg-opacity-60 p-10 rounded-lg text-center max-w-xl">
        <h1 class="text-4xl font-bold mb-4">{{ $paket->nama_paket }}</h1>
        <p class="text-lg">{{ $paket->fasilitas }}</p>
    </div>
</section>
    

    <section class="mt-20 p-4 w-full max-w-3xl mx-auto">
        <h2 class="text-4xl font-bold mb-8 text-center">Formulir Reservasi</h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('reservasi.simpan') }}" method="POST" class="space-y-5">
            @csrf
            <input type="hidden" name="paket_id" value="{{ $paket->id }}">

            <div>
                <label class="font-semibold">Nama Paket</label>
                <input type="text" value="{{ $paket->nama_paket }}" class="w-full border p-2 rounded bg-gray-100" disabled>
            </div>

            <div>
                <label class="font-semibold">Nama Lengkap</label>
                <input type="text" name="nama" class="w-full border p-2 rounded" required>
            </div>

            <div>
                <label class="font-semibold">Email</label>
                <input type="email" name="email" class="w-full border p-2 rounded" required>
            </div>

            <div>
                <label class="font-semibold">Telepon</label>
                <input type="text" name="telepon" class="w-full border p-2 rounded" required>
            </div>

            <div>
                <label class="font-semibold">Jumlah Orang</label>
                <input type="number" name="jumlah_orang" class="w-full border p-2 rounded" required min="1">
            </div>

            <div>
                <label class="font-semibold">Tanggal Kunjungan</label>
                <input type="date" name="tanggal_kunjungan" class="w-full border p-2 rounded" required>
            </div>

            <div>
                <label class="font-semibold">Catatan</label>
                <textarea name="catatan" rows="3" class="w-full border p-2 rounded"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-green-800 text-white px-6 py-2 rounded hover:bg-green-700">Kirim Reservasi</button>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-green-800 text-white mb-80 px-6 py-2 rounded hover:bg-green-700"><a href="/paket">Kembali</a></button>
            </div>
        </form>
    </section>


    <script>
        window.addEventListener('scroll', function () {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-green-800', 'backdrop-blur-xs');
                navbar.classList.add('bg-opacity-50'); 
                navbar.classList.add('border-b-1', 'border-gray-600');
                navbar.classList.remove('bg-transparent');
                
            } else if (window.scrollY === 0) {
                navbar.classList.add('bg-transparent');
                navbar.classList.remove('backdrop-blur-xs');
                navbar.classList.remove('bg-opacity-30');
                navbar.classList.remove('border-1');
            }else {
                navbar.classList.add('border-0');
                navbar.classList.add('bg-transparent');
                navbar.classList.remove('backdrop-blur-xs', 'bg-opacity-50', 'border-b-1');
            }
        });
    </script>

    <x-footer></x-footer>
</body>
</html>
