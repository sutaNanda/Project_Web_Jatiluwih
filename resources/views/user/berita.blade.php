@extends('layouts.main')

@section('content2')
<section class="w-full py-20 mt-20 bg-gradient-to-b from-gray-100 to-white font-sans">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-center text-4xl font-extrabold text-gray-900 tracking-wide mb-14 uppercase">Berita Terbaru</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Main Content -->
            <div class="md:col-span-2 space-y-10">
                @foreach ($berita->take(2) as $item)
                    <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                        @if ($item->gambar)
                            <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-80 object-cover">
                        @endif

                        <div class="p-6">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $item->judul }}</h3>
                            <p class="text-sm text-gray-500 mb-3">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</p>
                            <p class="text-gray-700 leading-relaxed mb-4">{{ Str::limit(strip_tags($item->konten), 120, '...') }}</p>
                            <a href="{{ route('berita.show', $item->id) }}" class="inline-block text-green-700 font-semibold hover:underline text-sm">Baca Selengkapnya →</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Sidebar -->
            <aside class="bg-white border border-gray-300 rounded-xl p-6 h-fit shadow-sm">
                <h3 class="text-xl font-bold text-gray-800 mb-6">Post Terbaru</h3>
                <div class="space-y-6">
                    @foreach ($berita as $item)
                        <div class="flex gap-4 border-b pb-4 last:border-none group">
                            <div class="w-24 h-20 overflow-hidden rounded-md flex-shrink-0">
                                <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                            </div>
                            <div class="flex-1">
                                <h4 class="text-sm font-semibold text-gray-800 leading-tight group-hover:text-green-700 transition">{{ $item->judul }}</h4>
                                <p class="text-xs text-gray-500 mb-1">{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</p>
                                <a href="{{ route('berita.show', $item->id) }}" class="text-green-600 text-sm hover:underline">Baca</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </aside>
        </div>
    </div>
</section>

@endsection
