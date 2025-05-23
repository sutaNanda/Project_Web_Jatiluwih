<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi - Desa Wisata Jatiluwih</title>
    <link rel="icon" href="{{ asset('img/logo-1.ico') }}" type=".Image/x-icons">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body>
    <!-- navbar -->
    <x-navbar></x-navbar>
    <!-- end navbar -->

    <!-- section home -->
    <section class="w-full h-screen flex items-center justify-center" style="background-image: url('{{ asset('img/gallery-10.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat">
        <div class="w-full h-full text-white items-center flex flex-col justify-center gap-4">
            <div class="text-6xl text-center font-bold leading-tight capitalize">
                <h2>berbagi paket wisata menarik <br> yang bisa dinikmati</h2>
            </div>
            <div>
                <p>"We Embrace #TheBeutyofAncientJatiluwih"</p> 
            </div>

        </div>
    </section>
    <!-- end section home -->

    <!-- section destinasi -->
    <section class="py-16 px-4">
        <div class="max-w-screen-xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Destinasi Wisata Populer di Desa Jatiluwih</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                @foreach ($destinasi as $item)
                    <div class="bg-white p-6 rounded-xl shadow transition duration-500 hover:shadow-lg">
                        <img src="{{ asset('gambar/' . $item->gambar) }}" alt="{{ $item->nama_destinasi }}" class="w-full h-48 object-cover rounded mb-4">
                        <h3 class="text-xl font-semibold mb-2">{{ $item->nama_destinasi }}</h3>
                        <p class="text-sm text-gray-700">
                            {{ Str::limit(strip_tags($item->deskripsi), 100, '...') }}
                            <span class="hidden more">{{ $item->deskripsi }}</span>
                        </p>
                        <a href="{{ route('destinasi.show', $item->id) }}">
                            <button onclick="toggleText(this)" class="mt-3 text-white bg-green-700 hover:bg-green-800 font-medium rounded px-4 py-2 text-sm transition">Lihat Selengkapnya</button>
                        </a> 
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- end section destinasi -->

    <!-- footer -->
    <x-footer></x-footer>
    <!-- end footer -->

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