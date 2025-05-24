@extends('layouts.main')

@section('content2')
    <!-- About Section -->
    <section class="w-full mt-7 p-12 flex items-center justify-center">
        <div class=" h-full p-2 flex justify-evenly" style="width: 95%;">
            <div class="w-2/5 h-full">
                <div class="w-full h-full flex items-center justify-center">
                    <img src="{{ asset('img/img-4.jpg') }}" alt="">
                </div>
                <div class="w-full h-full mt-10 text-justify">
                    <p>Sebagai desa wisata, Jatiluwih juga memperkenalkan kehidupan masyarakat lokal yang sebagian besar bekerja sebagai petani. Wisatawan dapat melihat langsung aktivitas pertanian, mencoba jalur trekking dan bersepeda di antara sawah, serta menikmati sajian kuliner khas Bali. Dengan perpaduan alam dan budaya yang kuat, Jatiluwih menjadi contoh nyata desa yang mempertahankan identitas dan tradisi di tengah perkembangan pariwisata. Dikelilingi oleh pegunungan, udara yang sejuk, serta pemandangan hijau yang terbentang luas, desa ini menjadi destinasi favorit bagi wisatawan yang ingin menikmati keindahan alam sambil merasakan ketenangan jauh dari keramaian kota.</p>
                </div>            
            </div>
            <div class="w-2/5 h-full">
                <div class="w-full h-full text-justify mb-10">
                    <h2 class="text-6xl font-bold mb-9">Tentang kami</h2>
                    <p>Desa Jatiluwih terletak di Kecamatan Penebel, Kabupaten Tabanan, Bali. Desa ini dikenal luas karena keindahan sawah teraseringnya yang luas dan rapi, serta sistem pengairan tradisional Bali yang disebut Subak, yang telah diakui sebagai warisan budaya dunia oleh UNESCO. Jatiluwih menawarkan suasana pedesaan Bali yang masih alami dan asri. </p>
                </div>
                <div class="w-full h-full flex items-center justify-center">
                    <img src="{{ asset('img/img-3.jpg') }}" alt="">
                </div>
            </div>

        </div>
        
    </section>
    
    <!-- Video Section -->
    <section class="bg-gray-100 py-20 text-center">
        <div class="w-full max-w-xl mx-auto">
            <iframe class="w-full h-[300px] rounded" src="https://www.youtube.com/embed/h6P48pYuUww?start=198" frameborder="0" allowfullscreen>

            </iframe>
        </div>
    </section>


   <!-- Visi Misi Section -->
    <section class="bg-white py-16 px-4">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4 text-black-700">Visi</h2>
                <p class="text-lg text-gray-700">“Catur Swadharmaning Desa Jatiluwih”</p>
                <p class="mt-4 text-gray-600">Mewujudkan Desa Jatiluwih yang mandiri, harmonis, dan berkelanjutan dengan mengembangkan sektor pariwisata berbasis budaya dan pelestarian alam.</p>
            </div>
    
            <div class="text-center">
                <h2 class="text-4xl font-bold mb-6 text-black-700">Misi</h2>
            </div>
    
            <div class="flex justify-center">
                <ul class="list-disc list-inside text-gray-700 text-lg space-y-4">
                    <li>Mewujudkan tata kelola pemerintahan desa yang transparan, bersih, dan mandiri.</li>
                    <li>Mengembangkan pola pembangunan desa berbasis masyarakat yang berkelanjutan.</li>
                    <li>Membina kemasyarakatan desa yang berlandaskan kemandirian dan keharmonisan.</li>
                    <li>Memberdayakan masyarakat desa menuju masyarakat yang maju dan mandiri.</li>
                </ul>
            </div>

        </div>
    </section>


    <!-- Galeri Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Galeri Desa</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Loop through 16 images -->
                @for ($i = 1; $i <= 12; $i++)
                    <div class="relative overflow-hidden">
                        <img class="w-full h-40 object-cover transform transition duration-300 hover:scale-110" 
                            src="{{ asset('img/gallery-' . $i . '.jpg') }}" alt="gallery {{ $i }}">
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection