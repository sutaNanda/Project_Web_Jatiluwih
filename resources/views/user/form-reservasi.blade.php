<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservasi - Desa Wisata Jatiluwih</title>

    
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link rel="icon" href="{{ asset('img/logo-1.ico') }}" type=".Image/x-icons">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <style>
        .star-input input:checked ~ svg,
        .star-input input:hover ~ svg {
            color: #facc15; /* Tailwind yellow-400 */
        }
    </style>

</head>
<body>

    <x-navbar></x-navbar>

   <section class="w-full h-screen relative flex items-center justify-center flex-col gap-10"
    style="background-image: url('{{ asset('img/profil2.jpg') }}'); background-size: cover; background-position: center;">
    
        <!-- Layer background blur -->
        <div class="absolute inset-0 bg-opacity-30 backdrop-blur-[2px]"></div>

        <!-- Konten tulisan di atas -->
        <div class="relative text-center w-full px-4">
            <h1 class="text-5xl font-bold uppercase text-white">{{ $paket->nama_paket }}</h1>
            <p class="text-white mt-8 text-xl">"We Embrace #TheEntranceofAncientJatiLuwih"</p>
        </div>

    </section>    

    <section class="mt-20 w-full flex justify-evenly">
        <div class="w-1/2 px-4 flex flex-col gap-4">
            <div class="border-6 border-green-800 flex items-center justify-center overflow-hidden">
                <img src="{{ asset('gambar/' . $paket->gambar) }}" alt="Gambar Paket" class="">            
            </div>
            
            <div class="bg-green-100 p-4 rounded text-justify mb-3">
                <h2 class="text-3xl font-bold mb-2 text-green-950 uppercase">Deskripsi Paket</h2>
                <p class="text-gray-800 text-md mb-3">{{ $paket->deskripsi }}</p>
                <p class="text-gray-800">
                    <span class="font-semibold text-green-950">Fasilitas :</span> {{ $paket->fasilitas }}
                </p>
                <p class="text-gray-800">
                    <span class="font-semibold text-green-950">Populer:</span>

                    {!! $paket->populer
                        ? '<svg class="w-5 h-5 inline text-yellow-400" fill="currentColor" viewBox="0 0 22 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 
                                        1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 
                                        1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 
                                        2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 
                                        2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 
                                        .387-1.575Z"/>
                        </svg>'
                        : '<span class="text-sm text-gray-500">Tidak Populer</span>' !!}
                </p>
                <p class="text-gray-800 mb-2"><span class="font-semibold text-green-950">Durasi :
                    </span> {{ $paket->durasi}}
                </p>
                <p class="text-yellow-800 mb-4 text-2xl font-semibold bg-yellow-200 w-[305px] py-2 px-2 rounded-sm">
                    Harga : Rp{{ number_format($paket->harga, 0, ',', '.') }} / Orang
                </p>
            </div>

            {{-- testimino --}}
            <div class="bg-white border-1 border-green-800 rounded-lg shadow-md p-6 ">
                <h2 class="text-2xl font-semibold text-green-800 mb-5 text-center">Beri Testimoni</h2>

                @if(session('testimoni_success'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-center font-medium">
                        {{ session('testimoni_success') }}
                    </div>
                @endif

                <form action="{{ route('testimoni.simpan') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                    @csrf
                    <input type="hidden" name="paket_id" value="{{ $paket->id }}">

                    <div>
                        <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
                        <input type="email" name="email" id="email" required
                            class="w-full border border-gray-300 rounded-md px-3 py-2
                                focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500"
                            placeholder="Email">
                    </div>

                    <div>
                        <label for="pesan" class="block text-gray-700 font-medium mb-1">Pesan Testimoni</label>
                        <textarea name="pesan" id="pesan" rows="4" required
                            class="w-full border border-gray-300 rounded-md px-3 py-2 resize-none
                                focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500"
                            placeholder="Tulis pengalamanmu..."></textarea>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-2">Rating</label>

                        {{-- Input tersembunyi untuk dikirim ke server --}}
                        <input type="hidden" name="rating" id="ratingInput" value="0">

                        {{-- Bintang klik --}}
                        <div id="starContainer" class="flex gap-1 cursor-pointer">
                            @for ($i = 1; $i <= 5; $i++)
                                <svg data-star="{{ $i }}" class="w-6 h-6 text-gray-300 transition duration-200 ease-in-out"
                                    fill="currentColor" viewBox="0 0 22 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 
                                            1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 
                                            1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 
                                            2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 
                                            2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 
                                            .387-1.575Z"/>
                                </svg>
                            @endfor
                        </div>
                    </div>

                    <div>
                        <label for="gambar" class="block text-gray-700 font-medium mb-1">Foto Kunjungan (opsional)</label>
                        <input type="file" name="gambar" id="gambar" accept="image/*"
                            class="w-full border border-gray-300 rounded-md px-3 py-2
                                focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                    </div>

                    <button type="submit"
                        class="w-full bg-green-600 text-white font-semibold py-2 rounded-md
                            hover:bg-green-700 transition-colors duration-200">
                        Kirim Testimoni
                    </button>
                </form>
            </div>

        </div>

        <div class="w-5/12 flex h-[800px] justify-center">
            <div class="w-10/12 bg-white p-6 rounded shadow-green-800 shadow-sm ">
                <h2 class="text-4xl font-bold mb-8 text-center">Formulir Reservasi</h2>

                @if(session('success'))
                    <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('reservasi.simpan') }}" method="POST" class="space-y-3 h-full">
                    @csrf
                    <input type="hidden" name="paket_id" value="{{ $paket->id }}">

                    <div>
                        <label class="font-semibold">Nama Paket</label>
                        <input type="text" value="{{ $paket->nama_paket }}" class="w-full border p-2 rounded bg-gray-100" disabled>
                    </div>

                    <div>
                        <label class="font-semibold">Nama Lengkap</label>
                        <input type="text" name="nama" class="w-full border p-2 rounded" required>
                    </div>

                    <div>
                        <label class="font-semibold">Email</label>
                        <input type="email" name="email" class="w-full border p-2 rounded" required>
                    </div>

                    <div>
                        <label class="font-semibold">Telepon</label>
                        <input type="text" name="telepon" class="w-full border p-2 rounded" required>
                    </div>

                    <div>
                        <label class="font-semibold">Jumlah Orang</label>
                        <input type="number" name="jumlah_orang" class="w-full border p-2 rounded" required min="1">
                    </div>

                    <div>
                        <label class="font-semibold">Tanggal Kunjungan</label>
                        <input type="date" name="tanggal_kunjungan" class="w-full border p-2 rounded" required>
                    </div>

                    <div>
                        <label class="font-semibold">Catatan</label>
                        <textarea name="catatan" rows="3" class="w-full border p-2 rounded"></textarea>
                    </div>

                    <div class="">
                        <button type="submit" class="bg-green-800 text-white px-6 py-2 rounded hover:bg-green-700">
                            Kirim Reservasi
                        </button>
                        <button type="submit" class="bg-blue-500 text-white mb-80 px-6 py-2 rounded hover:bg-blue-700">
                            <a href="/paket">Kembali</a>
                        </button>
                    </div>
                   
                </form>
            </div>
        </div>


    </section>


    <script>
        window.addEventListener('scroll', function () {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-green-800', 'backdrop-blur-xs');
                navbar.classList.add('bg-opacity-50'); 
                navbar.classList.add('border-b-1', 'border-gray-600');
                navbar.classList.remove('bg-transparent');
                
            } else if (window.scrollY === 0) {
                navbar.classList.add('bg-transparent');
                navbar.classList.remove('backdrop-blur-xs');
                navbar.classList.remove('bg-opacity-30');
                navbar.classList.remove('border-1');
            }else {
                navbar.classList.add('border-0');
                navbar.classList.add('bg-transparent');
                navbar.classList.remove('backdrop-blur-xs', 'bg-opacity-50', 'border-b-1');
            }
        });
    </script>

    <script>
        const stars = document.querySelectorAll('#starContainer svg');
        const ratingInput = document.getElementById('ratingInput');

        stars.forEach(star => {
            star.addEventListener('click', () => {
                const selectedRating = parseInt(star.getAttribute('data-star'));
                ratingInput.value = selectedRating;

                stars.forEach(s => {
                    const value = parseInt(s.getAttribute('data-star'));
                    s.classList.toggle('text-yellow-400', value <= selectedRating);
                    s.classList.toggle('text-gray-300', value > selectedRating);
                });
            });
        });
    </script>

    <x-footer></x-footer>
</body>
</html>
