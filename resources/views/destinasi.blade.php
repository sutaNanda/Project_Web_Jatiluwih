@extends('layouts.main')

@section('content2')
    <!-- section destinasi -->
    <section class="py-16 px-4">
        <div class="max-w-screen-xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Destinasi Wisata Populer di Desa Jatiluwih</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                @foreach ($destinasi as $item)
                    <div class="bg-white p-6 rounded-xl shadow transition duration-500 hover:shadow-lg border-2 border-green-800">
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
@endsection