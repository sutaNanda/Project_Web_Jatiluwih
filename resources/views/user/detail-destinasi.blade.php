<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $destinasi->nama_destinasi }} - Detail Destinasi</title>
    <link rel="icon" href="{{ asset('img/logo-1.ico') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none; 
        }

    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- Navbar --}}
    <x-navbar />
    {{-- End Navbar --}}

    {{-- Hero Section --}}
    <section class="relative h-[60vh] md:h-full md:-mt-32 mb-10">
        <img src="{{ asset('gambar/' . $destinasi->gambar) }}" alt="{{ $destinasi->nama_destinasi }}"
            class="w-full object-cover h-full md:aspect-[16/9] brightness-75">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end md:items-end px-4 pb-6 md:px-10 md:pb-10">
            <div>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-2 drop-shadow-lg">
                    {{ $destinasi->nama_destinasi }}
                </h1>
                <p class="text-white text-lg">Temukan keindahan dan pengalaman tak terlupakan di sini.</p>
            </div>
        </div>
    </section>

    {{-- Main Content --}}
    <main class="max-w-6xl mx-auto px-6 py-12">
        <div class="grid md:grid-cols-3 gap-10">
            
            {{-- Kolom Deskripsi + Gambar --}}
            <div class="md:col-span-2">
                <div class="bg-white p-8 rounded-xl shadow-md">
                    <h2 class="text-2xl font-bold text-green-700 mb-4">Deskripsi Destinasi</h2>
                    
                    {{-- Gambar Pendukung --}}
                    <img src="{{ asset('gambar/' . $destinasi->gambar) }}" alt="Suasana {{ $destinasi->nama_destinasi }}"
                        class="w-full h-64 object-cover rounded-lg shadow-sm mb-6">
                    
                    {{-- Isi Deskripsi --}}
                    @php
                        $paragraf = preg_split("/\r\n|\n|\r/", $destinasi->deskripsi);
                    @endphp

                    @foreach ($paragraf as $p)
                        @if(trim($p) !== '')
                            <p class="text-justify text-gray-700 leading-relaxed mb-4">
                                {{ $p }}
                            </p>
                        @endif
                    @endforeach

                    {{-- Tombol Kembali --}}
                    <div class="mt-10">
                        <a href="{{ route('destinasi.user') }}"
                        class="inline-flex items-center px-6 py-3 bg-green-600 text-white font-medium rounded-lg shadow-md hover:bg-green-700 transition duration-300 hover:underline">
                            ← Kembali ke Daftar Destinasi
                        </a>
                    </div>
                </div>
            </div>

            {{-- Info Singkat --}}
            <div class="bg-white p-8 rounded-xl shadow-md space-y-6 h-fit">
                <h2 class="text-2xl font-bold mb-4">Peta Desa</h2>
                <div class="flex justify-center rounded-xl overflow-hidden">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63159.33429414482!2d115.0775998811957!3d-8.356485497860502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd227bedf45cc29%3A0x5030bfbca831a80!2sJatiluwih%2C%20Kec.%20Penebel%2C%20Kabupaten%20Tabanan%2C%20Bali!5e0!3m2!1sid!2sid!4v1751197847277!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
                </div>
            </div>
        </div>
    </main>

    <section class="pl-8">
        <div class="max-w-screen-xl mx-auto">
            <h2 class="text-2xl md:text-4xl font-bold leading-tight capitalize mb-5">Destinasi Lainnya</h2>

            <div class="overflow-x-auto">
                <div class="flex space-x-4 snap-x snap-mandatory overflow-x-scroll scrollbar-hide px-2">
                    @foreach ($daftarDestinasi as $item)
                        <div class="min-w-[350px] h-[450px] md:min-w-[550px] md:h-[500px] snap-start">
                            <a href="{{ route('destinasi.show', $item->id) }}">
                                <img src="{{ asset('gambar/' . $item->gambar) }}" alt="{{ $item->nama_destinasi }}" class="w-full h-[250px] md:h-[370px] object-cover rounded-xl mb-3">
                            </a>
                            <h3 class="text-2xl text-green-800 font-semibold mb-1 md:mb-2">
                                {{ $item->nama_destinasi }}
                            </h3>
                            <p class="text-gray-700 md:text-md text-justify">
                                {{ Str::limit(strip_tags($item->deskripsi), 200,'...') }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>



    {{-- Footer --}}
    <x-footer />
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
