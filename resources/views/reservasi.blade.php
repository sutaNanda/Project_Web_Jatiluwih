@extends('layouts.main')

@section('content2')

    <!-- section paket -->
   <section>
        <div class="w-full h-full p-4 flex flex-col items-center mt-20">
            <div class="text-5xl text-center font-bold leading-tight capitalize mb-10">
                <h2>Nikmati beragam paket <br> wisata di desa Jatiluwih</h2>
            </div>

            <!-- Grid container -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 w-full max-w-6xl">
                <!-- Kartu paket wisata -->
                <!-- Salin elemen <div class="bg-white ..."> ini untuk setiap paket -->
                @foreach ($paket as $item)
                    <div class="bg-white rounded-lg shadow-sm mx-auto border-2 border-green-800">
                        <a href="#" class="w-72 h-72 flex justify-center items-center mx-auto">
                            <img src="{{ asset('gambar/' . $item->gambar) }}" alt="{{ $item->nama_paket }}" class="w-full h-48 object-cover rounded">
                        </a>
                        <div class="px-5 pb-5 ">
                            <a href="#">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900">{{ $item->nama_paket }}</h5>
                            </a>
                            <p>Rp{{ number_format($item->harga, 0, ',', '.') }}</p>
                            <div>
                                <p>{{ $item->fasilitas }}</p>
                            </div>
                            <div class="flex items-center mt-2.5 mb-4 gap-2">
                                @if ($item->populer)
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded-sm">Populer</span>
                                @endif
                                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-sm">{{ $item->durasi }}</span>
                            </div>
                            <div class="flex flex-col w-1/2 mx-auto mb-4">
                                <a href="#" class="text-white bg-green-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-4">Lihat Paket</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Salin kartu di atas untuk paket lainnya -->
            </div>

        </div>
    </section>

    <!-- end section paket -->
@endsection