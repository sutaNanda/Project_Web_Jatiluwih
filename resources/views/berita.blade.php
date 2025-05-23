<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/logo-1.ico') }}" type=".Image/x-icons">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>Berita - Desa Wisata Jatiluwih</title>
</head>
<body>
    <!-- Navbar -->
    <x-navbar></x-navbar>
    
    <!-- Hero Section -->
    <section class="w-full h-screen flex items-center justify-center pt-20" style="background-image: url('{{ asset('img/bg-1.jpg') }}'); background-size: cover; background-position: center;">
        <div class="text-white text-center space-y-6">
            <h2 class="text-4xl md:text-6xl font-bold">Berita Seputar Pariwisata di Jatiluwih dan Tabanan</h2>
            <p class="text-lg">“We Embrace #TheBeautyofAncientJatiluwih”</p>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="w-full py-6">
        <div class="flex flex-col md:flex-row max-w-screen-xl mx-auto p-4 gap-6"> 
            <div class="flex-1 space-y-6 bg-white text-black rounded-lg p-4">
                <div class="bg-gray-100 rounded-lg p-4">
                    <!-- Placeholder gambar berita -->
                    <div class="h-48 bg-gray-300 rounded mb-4"></div>
                    <h3 class="text-xl font-semibold mb-2">Judul Berita</h3>
                    <p class="text-sm mb-2 text-gray-600">admin | 06/05/2024</p>
                    <p class="mb-2">Deskripsi singkat berita ini...</p>
                    <a href="#" class="text-blue-600 hover:underline">Read More</a>
                </div>
                
                <div class="bg-gray-100 rounded-lg p-4">
                    <!-- Placeholder gambar berita -->
                    <div class="h-48 bg-gray-300 rounded mb-4"></div>
                    <h3 class="text-xl font-semibold mb-2">Judul Berita</h3>
                    <p class="text-sm mb-2 text-gray-600">admin | 06/05/2024</p>
                    <p class="mb-2">Deskripsi singkat berita ini...</p>
                    <a href="#" class="text-blue-600 hover:underline">Read More</a>
                </div>

                <div class="bg-gray-100 rounded-lg p-4">
                    <!-- Placeholder gambar berita -->
                    <div class="h-48 bg-gray-300 rounded mb-4"></div>
                    <h3 class="text-xl font-semibold mb-2">Judul Berita</h3>
                    <p class="text-sm mb-2 text-gray-600">admin | 06/05/2024</p>
                    <p class="mb-2">Deskripsi singkat berita ini...</p>
                    <a href="#" class="text-blue-600 hover:underline">Read More</a>
                </div>

            </div>
        

            <!-- Sidebar Latest Posts -->
            <aside class="w-full md:w-1/3 bg-white text-black rounded-lg p-4">
                <h3 class="text-lg font-semibold mb-4">Latest Post</h3>
                <div class="mb-4 border border-gray-200 rounded p-2">
                    <div class="h-20 bg-gray-300 mb-2 rounded"></div>
                    <strong class="block">Judul Postingan</strong>
                    <a href="#" class="text-blue-600 text-sm hover:underline">Read More</a>
                    <div class="text-xs text-gray-600">admin | 06/05/2024</div>
                </div>
                
                <div class="mb-4 border border-gray-200 rounded p-2">
                    <div class="h-20 bg-gray-300 mb-2 rounded"></div>
                    <strong class="block">Judul Postingan</strong>
                    <a href="#" class="text-blue-600 text-sm hover:underline">Read More</a>
                    <div class="text-xs text-gray-600">admin | 06/05/2024</div>
                </div>

                <div class="mb-4 border border-gray-200 rounded p-2">
                    <div class="h-20 bg-gray-300 mb-2 rounded"></div>
                    <strong class="block">Judul Postingan</strong>
                    <a href="#" class="text-blue-600 text-sm hover:underline">Read More</a>
                    <div class="text-xs text-gray-600">admin | 06/05/2024</div>
                </div>
            </aside>
        </div> 
    </section>

    <!-- footer -->
    <x-footer></x-footer>
    <!-- end footer -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 28,
            centeredSlides: false,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    centeredSlides: false,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 28,
                    centeredSlides: false,
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 32,
                },
            },
        });
    </script>
</body>
</html>
