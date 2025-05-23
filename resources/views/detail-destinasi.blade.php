<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
    {{-- navbar --}}
    <x-navbar></x-navbar>
    {{-- end navbar --}}

    <section>
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl font-bold mb-6">{{ $destinasi->nama_destinasi }}</h1>
            <img src="{{ asset('gambar/' . $destinasi->gambar) }}" alt="{{ $destinasi->nama_destinasi }}" class="w-full h-96 object-cover rounded mb-6">
            <div class="text-gray-800 leading-relaxed text-lg">
                {!! $destinasi->deskripsi !!}
            </div>
        </div>
    </section>

    {{-- footer --}}
    <x-footer></x-footer>
    {{-- end footer --}}

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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
</body>
</html>