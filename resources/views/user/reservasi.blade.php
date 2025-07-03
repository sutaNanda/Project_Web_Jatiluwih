@extends('layouts.main')

@section('content2')

    <!-- section paket -->
<section class="py-4 pl-8 md:py-16 md:px-4">
    <div class="max-w-screen-xl mx-auto">
        <h2 class="text-xl md:text-5xl md:text-center font-bold leading-tight capitalize mb-10">
            Nikmati beragam paket <br> wisata di desa Jatiluwih
        </h2>

        <!-- Grid container -->
        <div class="flex overflow-x-auto space-x-4 snap-x md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-8 md:overflow-visible">
            @foreach ($paket as $item)
                <div class="bg-white p-3 rounded-xl shadow transition hover:shadow-lg border-2 border-green-800 min-w-[220px] snap-center  hover:border-sky-950 cursor-pointer flex flex-col md:px-4 md:min-h-[400px] md:min-w-[350px]">
                    
                    <!-- Gambar -->
                    <a href="#" class="w-full h-32 md:h-48 overflow-hidden flex items-center justify-center rounded-lg mt-2">
                        <img src="{{ asset('gambar/' . $item->gambar) }}" alt="{{ $item->nama_paket }}" class="w-full h-full object-cover">
                    </a>

                    <!-- Konten -->
                    <div class="flex-grow flex flex-col justify-between mt-3">
                        <div>
                            <h5 class="text-lg md:text-xl font-semibold text-gray-900 mb-1">{{ $item->nama_paket }}</h5>
                            <p class="text-sm text-gray-700 mb-1">{{ Str::limit(strip_tags($item->fasilitas), 50, '...') }}</p>
                            <p class="capitalize text-base font-medium text-yellow-800 md:font-medium md:text-2xl md:mb-2">Rp{{ number_format($item->harga, 0, ',', '.') }}</p>

                            @if ($item->populer)
                                <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2 py-0.5 rounded mt-1 inline-block">Populer</span>
                            @endif
                        </div>

                        <!-- Tombol -->
                        <div class="mt-3 mb-5 flex justify-center">
                            <a href="{{ route('form-reservasi', $item->id) }}" class="block text-center text-white bg-green-800 hover:bg-green-900 rounded-md text-sm px-3 py-2 transition">
                                Lihat Paket
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
    <!-- end section paket -->
@endsection