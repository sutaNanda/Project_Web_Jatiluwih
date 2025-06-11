    <section>
        <div class="w-full h-full p-4 flex flex-col items-center mt-20">
            <div class="text-5xl text-center font-bold leading-tight capitalize mb-14">
                <h2>Nikmati beragam paket <br> wisata di desa Jatiluwih</h2>
            </div>

            <!-- Grid container -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 w-full max-w-6xl">
                @foreach ($paket as $item)
                    <div class="bg-white rounded-xl px-4  mx-auto border-2 border-green-800 min-h-[400px] min-w-[350px] flex flex-col shadow-gray-300 shadow-sm hover:border-sky-950 ">

                        <!-- Gambar dengan ukuran tetap dan rasio konsisten -->
                        <a href="#" class="w-full h-[200px] overflow-hidden flex items-center justify-center mt-4 rounded-lg">
                            <img src="{{ asset('gambar/' . $item->gambar) }}" alt="{{ $item->nama_paket }}" class="w-full h-full object-cover">
                        </a>
                        
                        <!-- Konten -->
                        <div class="py-5 flex-grow flex flex-col justify-between">
                            <div class="flex-grow pl-1">
                                <h5 class="text-2xl mb-2 font-semibold tracking-tight text-gray-900">{{ $item->nama_paket }}</h5>
                                
                                <p class="text-gray-800 mb-2">{{ Str::limit(strip_tags($item->fasilitas), 50, '...') }}</p>
                                
                                <p class="capitalize font-medium text-yellow-800 text-2xl mb-2">harga: Rp{{ number_format($item->harga, 0, ',', '.') }}</p>

                                @if ($item->populer)
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded-sm inline-block mt-2">Populer</span>
                                @endif
                            </div>

                            <!-- Tombol -->
                            <div class="flex justify-center mt-4">
                                <a href="{{ route('form-reservasi', $item->id) }}" class="text-white bg-green-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Lihat Paket
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>