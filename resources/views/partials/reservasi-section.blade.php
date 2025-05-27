<section>
        <div class="w-full h-full p-4 flex flex-col items-center">
            <div class="text-5xl text-center font-bold leading-tight capitalize mb-14">
                <h2>Nikmati beragam paket wisata <br> di desa Jatiluwih</h2>
            </div>

            <!-- Grid container -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 w-full max-w-6xl">
                <!-- Kartu paket wisata -->
                @foreach ($paket as $item)
                    <div class="bg-white rounded-lg shadow transition duration-500 hover:shadow-lg mx-auto border-2 border-green-800">
                        <a href="#" class="w-72 pt-6 flex justify-center items-center mx-auto">
                            <img src="{{ asset('gambar/' . $item->gambar) }}" alt="{{ $item->nama_paket }}" class="w-full h-48 object-cover rounded">
                        </a>
                        <div class="px-10 p-5 mx-auto" style="line-height: 1.5">
                            <a href="#">
                                <h5 class="text-2xl font-semibold tracking-tight text-gray-900">{{ $item->nama_paket }}</h5>
                            </a>
                            <p class="capitalize font-medium text-yellow-800">harga: Rp{{ number_format($item->harga, 0, ',', '.') }}</p>
                            <p class="text-gray-800">{{ $item->fasilitas }}</p>
                            <div class="flex items-center mt-2.5 mb-4 gap-2">
                                @if ($item->populer)
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded-sm">Populer</span>
                                @endif
                            </div>
                            <div class="flex flex-col w-1/2 mx-auto mb-4">
                                <a href="#" class="text-white bg-green-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-4">Lihat Paket</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>