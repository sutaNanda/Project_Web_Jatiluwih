@extends('layouts.main')

@section('content2')
    <!-- About Section -->
    <section id="about" class="w-full bg-white mt-5 px-4 py-10 flex items-center justify-center">
        <div class="w-full max-w-6xl flex flex-col-reverse md:flex-row gap-12">

            <!-- Gambar Kiri (Mobile: bawah, Desktop: kiri) -->
            <div class="w-full md:w-1/2 flex flex-col gap-6 px-5">
                <img src="{{ asset('img/img-4.jpg') }}" alt="Foto Kegiatan" class="shadow-md w-full h-[300px] object-cover md:h-auto">
                <p class="text-justify text-sm sm:text-base leading-relaxed">
                    Sebagai desa wisata, Jatiluwih juga memperkenalkan kehidupan masyarakat lokal yang sebagian besar bekerja sebagai petani. Wisatawan dapat melihat langsung aktivitas pertanian, mencoba jalur trekking dan bersepeda di antara sawah, serta menikmati sajian kuliner khas Bali. Dengan perpaduan alam dan budaya yang kuat, Jatiluwih menjadi contoh nyata desa yang mempertahankan identitas dan tradisi di tengah perkembangan pariwisata. Dikelilingi oleh pegunungan, udara yang sejuk, serta pemandangan hijau yang terbentang luas, desa ini menjadi destinasi favorit bagi wisatawan yang ingin menikmati keindahan alam sambil merasakan ketenangan jauh dari keramaian kota.
                </p>

            </div>  

            <!-- Konten Kanan -->
            <div class="w-full md:w-1/2 flex flex-col items-start gap-6 px-5">
                <!-- Judul -->
                <h2 class="text-4xl mx-auto sm:text-4xl md:text-6xl md:mx-0 font-bold text-black">Tentang Kami</h2>

                <!-- Deskripsi -->
                <p class="text-justify text-sm sm:text-base leading-relaxed">
                    Desa Jatiluwih terletak di Kecamatan Penebel, Kabupaten Tabanan, Bali. Desa ini dikenal luas karena keindahan sawah teraseringnya yang luas dan rapi, serta sistem pengairan tradisional Bali yang disebut Subak, yang telah diakui sebagai warisan budaya dunia oleh UNESCO. Jatiluwih menawarkan suasana pedesaan Bali yang masih alami dan asri.
                </p>

                <!-- Gambar tambahan -->
                <img src="{{ asset('img/img-3.jpg') }}" alt="Sawah Jatiluwih" class="shadow-md w-full h-[350px] object-cover md:h-auto">


            </div>

        </div>
    </section>

    
    <!-- Video Section -->
    <section class="bg-gray-100 py-10 md:py-20 text-center px-8">
        <div class="w-full max-w-xl mx-auto">
            <iframe class="w-full h-[300px] rounded" src="https://www.youtube.com/embed/h6P48pYuUww?start=198" frameborder="0" allowfullscreen>

            </iframe>
        </div>
    </section>


    <!-- Visi & Misi Section -->
    <section class="bg-white py-16 px-4">
        <div class="max-w-5xl mx-auto px-4">

            <!-- Visi -->
            <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-green-800 mb-4">Visi</h2>
            <p class="italic text-green-700 mb-2">“Catur Swadharmaning Desa Jatiluwih”</p>
            <p class="text-gray-600 text-base sm:text-lg max-w-2xl mx-auto">
                Mewujudkan Desa Jatiluwih yang mandiri, harmonis, dan berkelanjutan dengan mengembangkan sektor pariwisata berbasis budaya dan pelestarian alam.
            </p>
            </div>

            <!-- Misi -->
            <div class="text-center mb-6">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-green-800 mb-6">Misi</h2>
            </div>

            <!-- List Misi -->
            <div class="flex justify-center">
                <ul class="space-y-4 list-none text-gray-700 text-base sm:text-lg max-w-xl">
                    <li class="flex items-start gap-3">
                        <span class="mt-1 text-green-600 font-bold">✓</span>
                        <span>Mewujudkan tata kelola pemerintahan desa yang transparan, bersih, dan mandiri.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1 text-green-600 font-bold">✓</span>
                        <span>Mengembangkan pola pembangunan desa berbasis masyarakat yang berkelanjutan.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1 text-green-600 font-bold">✓</span>
                        <span>Membina kemasyarakatan desa yang berlandaskan kemandirian dan keharmonisan.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1 text-green-600 font-bold">✓</span>
                        <span>Memberdayakan masyarakat desa menuju masyarakat yang maju dan mandiri.</span>
                    </li>
                </ul>
            </div>

        </div>
    </section>



    <!-- Galeri Section -->
    <section class="pt-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Galeri Desa</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Loop through 16 images -->
                @for ($i = 1; $i <= 10; $i++)
                    <div class="relative overflow-hidden">
                        <img class="w-full h-40 object-cover transform transition duration-300 hover:scale-110" 
                            src="{{ asset('img/gallery-' . $i . '.jpg') }}" alt="gallery {{ $i }}">
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection