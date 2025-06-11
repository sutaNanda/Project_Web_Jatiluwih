<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->judul }} - Detail Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-100 via-white to-gray-100 text-gray-800">

    {{-- Navbar --}}
    <x-navbar></x-navbar>

    {{-- Gambar Header --}}
    <div class="-mt-32">
        @if ($berita->gambar)
            <img 
                src="{{ asset($berita->gambar) }}" 
                alt="{{ $berita->judul }}" 
                class="w-full object-cover aspect-[16/9] shadow-2xl"
            >
        @else
            <div class="w-full aspect-[16/9] bg-gray-300 flex items-center justify-center text-gray-500 text-xl rounded-b-[3rem] shadow-inner">
                Tidak ada gambar
            </div>
        @endif
    </div>

    <main class="pb-24 pt-16">
        <div class="max-w-7xl mx-auto px-6 md:px-10 grid grid-cols-1 md:grid-cols-3 gap-12">
            
            {{-- Konten Utama --}}
            <div class="md:col-span-2 bg-white p-10 rounded-3xl border-1 border-gray-200">
                <h1 class="text-5xl font-bold text-green-800 leading-tight mb-6 tracking-tight">
                    {{ $berita->judul }}
                </h1>

                {{-- Tanggal --}}
                <p class="text-sm text-gray-400 mb-6 italic">
                    Diposting pada {{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d F Y') }}
                </p>

                {{-- Isi Konten --}}
               <article class="prose prose-lg max-w-none text-gray-700 leading-relaxed text-justify">
                @php
                    $paragraf = explode("\n\n", $berita->konten);
                @endphp

                @foreach ($paragraf as $p)
                    <p>{!! nl2br(e($p)) !!}</p>
                @endforeach
                 </article>


                {{-- Tombol Kembali --}}
                <div class="mt-12">
                    <a href="{{ url('/berita') }}" 
                       class="inline-flex items-center gap-2 px-6 py-2.5 bg-green-600 text-white font-semibold rounded-full shadow-md hover:bg-green-700 transition-all">
                        ← Kembali ke Daftar Berita
                    </a>
                </div>
            </div>

            {{-- Sidebar --}}
            <aside class="md:col-span-1 bg-white p-8 rounded-3xl border border-gray-200 overflow-y-auto max-h-[500px]">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b-2 border-green-600 pb-2">
                    Berita Terbaru
                </h2>
                <ul class="space-y-6">
                    @foreach ($berita_terbaru as $item)
                        <li class="hover:scale-[1.02] transition-transform">
                            <a href="{{ url('/berita/' . $item->id) }}" class="block text-green-700 font-semibold hover:underline">
                                {{ $item->judul }}
                            </a>
                            <span class="text-xs text-gray-400 block mt-1">
                                {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                            </span>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </main>

    {{-- Footer --}}
    <x-footer></x-footer>

    {{-- Navbar Scroll Effect --}}
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