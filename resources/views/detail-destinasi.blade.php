<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $destinasi->nama_destinasi }} - Detail Destinasi</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100 text-gray-800">

    {{-- Navbar --}}
    <x-navbar></x-navbar>
    {{-- End Navbar --}}

  {{-- Gambar Fullscreen di Atas --}}
<div class="-mt-32"> {{-- Geser ke atas sejajar navbar --}}
    <img src="{{ asset('gambar/' . $destinasi->gambar) }}" 
         alt="{{ $destinasi->nama_destinasi }}" 
         class="w-full object-cover aspect-[16/9]">
</div>

<main class="pb-16">
    <div class="max-w-4xl mx-auto px-6 mt-8">
        <h1 class="text-4xl font-bold text-green-700 mb-4">
            {{ $destinasi->nama_destinasi }}
        </h1>

        <div class="text-lg leading-relaxed text-justify">
            {!! nl2br(e($destinasi->deskripsi)) !!}
        </div>

        <div class="mt-8">
            <a href="{{ route('destinasi.user') }}" 
               class="inline-block px-6 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">
                ← Kembali ke Daftar Destinasi
            </a>
        </div>
    </div>
</main>



    {{-- Footer --}}
    <x-footer></x-footer>
    {{-- End Footer --}}

    {{-- Scroll Navbar Script --}}
    <script>
        window.addEventListener('scroll', function () {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-green-800', 'border-b', 'border-gray-600');
                navbar.classList.remove('bg-transparent');
            } else {
                navbar.classList.remove('bg-green-800', 'border-b', 'border-gray-600');
                navbar.classList.add('bg-transparent');
            }
        });
    </script>
</body>
</html>
