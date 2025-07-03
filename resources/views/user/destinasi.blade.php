@extends('layouts.main')

@section('content2')
    <!-- section destinasi -->
<section class="py-5 pl-8 md:py-16 md:px-4">
  <div class="max-w-screen-xl mx-auto ">
    <h2 class="text-2xl md:text-5xl md:text-center font-bold leading-tight capitalize mb-5 md:mb-14">
      Destinasi Wisata Populer <br> <span class="text-green-800 md:text-black">Di Desa Jatiluwih</span>
    </h2>

    <div class="flex overflow-x-auto space-x-3 snap-x md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-8 md:px-10 md:overflow-visible">
      @foreach ($destinasi as $item)
        <div class="bg-white p-3 rounded-xl shadow transition hover:shadow-lg border-2 border-green-800 min-w-[200px] snap-center md:min-w-0 md:p-6">
          <img src="{{ asset('gambar/' . $item->gambar) }}" alt="{{ $item->nama_destinasi }}" class="w-full h-40 object-cover rounded mb-3 md:h-48 md:mb-4">
          <h3 class="text-lg font-semibold mb-1 md:text-xl md:mb-2">{{ $item->nama_destinasi }}</h3>
          <p class="text-xs text-gray-700 md:text-md">
            {{ Str::limit(strip_tags($item->deskripsi), 80,'...') }}
          </p>
          <a href="{{ route('destinasi.show', $item->id) }}">
            <button class="mt-2 text-white bg-green-700 hover:bg-green-800 font-medium rounded px-3 py-1 text-xs transition md:text-sm md:px-4 md:py-2 cursor-pointer">
              Lihat Selengkapnya
            </button>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</section>

    <!-- end section destinasi -->





@endsection