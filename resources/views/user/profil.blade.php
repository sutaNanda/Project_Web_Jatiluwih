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
                @for ($i = 1; $i <= 12; $i++)
                    <div class="relative overflow-hidden rounded-xl">
                        <img class="w-full h-56 object-cover transform transition duration-300 hover:scale-110 " 
                        src="{{ asset('img/gallery-' . $i . '.jpg') }}" alt="gallery {{ $i }}">

                        <div class="absolute bottom-0 right-0 p-4 flex items-center justify-center">
                            <svg class="w-7 h-7 " viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#ffffff"></path> <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="#ffffff"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" fill="#ffffff"></path> </g></svg>

                        </div>

                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection