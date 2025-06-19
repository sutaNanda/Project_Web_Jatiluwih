@extends('layouts.main')

@section('content2')
<section class="w-full py-16 mt-20 bg-gray-100 font-sans">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-center text-4xl font-extrabold text-gray-900 tracking-wide mb-12 uppercase">Berita Terbaru</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="md:col-span-2 space-y-8">
                @foreach ($berita->take(2) as $item )
                    <div class="bg-white border h-[600px] border-gray-300 rounded-md overflow-hidden hover:shadow-md transition duration-300">
                        @if ($item->gambar)
                            <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-96 object-cover">
                        @endif

                        <div class="p-5">
                            <h3 class="text-xl font-bold text-gray-800 mb-1">{{ $item->judul }}</h3>
                            <p class="text-sm text-gray-500 mb-3">{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</p>
                            <p class="text-gray-700 leading-relaxed mb-4">{{ Str::limit(strip_tags($item->konten), 100, '...') }}</p>
                            <a href="{{ route('berita.show', $item->id) }}" class="inline-block text-indigo-600 font-semibold hover:underline text-sm">Baca Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Sidebar -->
            <aside class="bg-white border border-gray-300 rounded-md p-5 h-fit">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Post Terbaru</h3>
                <div class="space-y-5">
                    @foreach ($berita as $item)
                        <div class="flex gap-4 border-b pb-4 last:border-none">
                            <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}" class="w-24 h-20 object-cover rounded-md">
                            <div class="flex-1">
                                <h4 class="text-md font-semibold text-gray-900 leading-snug">{{ $item->judul }}</h4>
                                <p class="text-xs text-gray-500 mb-1">{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</p>
                                <a href="{{ route('berita.show', $item->id) }}" class="text-indigo-600 text-sm hover:underline">Baca</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection
