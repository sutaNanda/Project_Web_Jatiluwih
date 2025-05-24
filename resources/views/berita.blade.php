@extends('layouts.main')

@section('content2')

    <!-- Main Content Section -->
    <section class="w-full py-6 mt-20">
        <h2 class="text-center capitalize font-bold mb-6 text-6xl text-black">Berita Terbaru</h2>
        <div class="flex flex-col md:flex-row max-w-screen-xl mx-auto px-16 py-8 gap-16"> 
            <div class="flex-1 space-y-10 bg-white text-black rounded-lg p-4">
                @foreach ($berita as $item)
                    <div class="bg-gray-100 rounded-lg p-4 border-2 border-green-800">
                        <!-- Gambar berita -->
                        @if ($item->gambar)
                            <img src="{{ asset('gambar/' . $item->gambar) }}" alt="{{ $item->judul }}" class="h-48 w-full object-cover rounded mb-4">
                        @else
                            <div class="h-48 bg-gray-300 rounded mb-4"></div>
                        @endif

                        <h3 class="text-xl font-semibold mb-2">{{ $item->judul }}</h3>
                        <p class="text-sm mb-2 text-gray-600">| {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</p>
                        <p class="mb-2">
                            {{ Str::limit(strip_tags($item->konten), 100, '...') }}
                        </p>
                        <a href="#" class="text-blue-600 hover:underline">Read More</a>
                    </div>
                @endforeach
            </div>           
        

            <!-- Sidebar Latest Posts -->
            <aside class="w-full md:w-1/3 bg-white text-black rounded-lg p-4">
                <h3 class="text-3xl font-semibold mb-4">Latest Post</h3>
                @foreach ($berita as $item)
                    <div class="mb-4 border-2 border-green-800 rounded p-2 py-4">
                        <img src="{{ asset('gambar/' . $item->gambar) }}" alt="{{ $item->judul }}" class="h-40 w-full object-cover rounded mb-4 mx-auto">                        
                        <strong class="block">{{ $item->judul }}</strong>
                        <a href="#" class="text-blue-600 text-sm hover:underline">Read More</a>
                        <div class="text-xs text-gray-600">| {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</div>
                    </div>
                @endforeach
            </aside>
        </div> 
    </section>
@endsection