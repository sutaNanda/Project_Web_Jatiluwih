<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $destinasi->nama_destinasi }} - Detail Destinasi</title>
    <link rel="icon" href="{{ asset('img/logo-1.ico') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- Navbar --}}
    <x-navbar />
    {{-- End Navbar --}}

    {{-- Hero Section --}}
    <section class="relative -mt-32 mb-10">
        <img src="{{ asset('gambar/' . $destinasi->gambar) }}" alt="{{ $destinasi->nama_destinasi }}"
            class="w-full object-cover aspect-[16/9] brightness-75">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-10">
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
                        class="inline-flex items-center px-6 py-3 bg-green-600 text-white font-medium rounded-lg shadow-md hover:bg-green-700 transition duration-300">
                            ← Kembali ke Daftar Destinasi
                        </a>
                    </div>
                </div>
            </div>

            {{-- Info Singkat --}}
            <div class="bg-white p-8 rounded-xl shadow-md space-y-6 h-fit">
                <h2 class="text-xl font-bold text-green-700 mb-2">Informasi Singkat</h2>
                
                <div class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 12.414a2 2 0 00-2.828 0L6.343 16.657A8 8 0 1117.657 16.657z" /></svg>
                    <div>
                        <p class="text-sm text-gray-500">Lokasi</p>
                        <p class="font-semibold text-gray-800">Jatiluwih, Bali</p> {{-- Bisa diganti --}}
                    </div>
                </div>

                <div class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.956a1 1 0 00.95.69h4.187c.969 0 1.371 1.24.588 1.81l-3.392 2.462a1 1 0 00-.364 1.118l1.287 3.956c.3.921-.755 1.688-1.538 1.118L10 14.347l-3.393 2.462c-.782.57-1.837-.197-1.538-1.118l1.287-3.956a1 1 0 00-.364-1.118L2.6 9.383c-.783-.57-.38-1.81.588-1.81h4.187a1 1 0 00.95-.69l1.286-3.956z" />
                    </svg>
                    <div>
                        <p class="text-sm text-gray-500">Rating</p>
                        <p class="font-semibold text-gray-800">4.8 / 5</p>
                    </div>
                </div>

                <div class="flex items-start gap-3">
                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24"><path d="M8 7V3m8 4V3m-9 4h10a2 2 0 012 2v11a2 2 0 01-2 2H7a2 2 0 01-2-2V9a2 2 0 012-2z"/></svg>
                    <div>
                        <p class="text-sm text-gray-500">Jam Operasional</p>
                        <p class="font-semibold text-gray-800">08.00 - 17.00 WITA</p>
                    </div>
                </div>
            </div>
        </div>
    </main>


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
