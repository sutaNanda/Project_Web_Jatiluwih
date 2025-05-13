<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>Berita</title>
</head>
<body class="bg-black text-white">

<!-- Navbar -->
<nav class="fixed w-full z-20 top-0 start-0 bg-transparent transition-all duration-300" id="navbar">
    <div class="max-w-screen-xl flex flex-wrap mx-auto p-4 justify-center items-center">
        <a href="/home" class="flex items-center space-x-3 rtl:space-x-reverse p-3 mr-9">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-12 h-12">
        </a>
        <!-- Navigasi utama -->
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 font-normal">
                <li><a href="home" class="block py-2 px-3 text-white hover:text-blue-500">Beranda</a></li>
                <li><a href="#" class="block py-2 px-3 text-white hover:text-blue-500">Destinasi</a></li>
                <li><a href="#" class="block py-2 px-3 text-white font-bold">Berita</a></li>
                <li><a href="#" class="block py-2 px-3 text-white hover:text-blue-500">Profil Desa</a></li>
                <li><a href="#" class="block py-2 px-3 text-white hover:text-blue-500">Kontak Kami</a></li>
                <li><a href="#" class="block py-2 px-3 text-white hover:text-blue-500">Pemesanan</a></li>
                <li><a href="#" class="block py-2 px-3 text-white hover:text-blue-500">Bahasa</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="w-full h-screen flex items-center justify-center pt-20" style="background-image: url('{{ asset('img/bg-1.jpg') }}'); background-size: cover; background-position: center;">
    <div class="text-white text-center space-y-6">
        <h2 class="text-4xl md:text-6xl font-bold">Berita Seputar Pariwisata di Jatiluwih dan Tabanan</h2>
        <p class="text-lg">“We Embrace #TheBeautyofAncientJatiluwih”</p>
    </div>
</section>

<!-- Main Content Section -->
<section class="w-full bg-white py-6">
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
<footer class="bg-green-800 dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="" class="flex items-center flex-wrap w-96">
                    <img src="{{ asset('img/logo.png') }}" class="h-8 me-3" alt="" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white dark:text-white">Desa Wisata Jatiluwih</span>
                </a>
                    <p class="text-white text-justify flex items-center flex-wrap w-96">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum blanditiis sint omnis magni nesciunt quas nostrum magnam facere! Harum quo necessitatibus, minus inventore accusantium ullam nesciunt alias recusandae obcaecati. Consequuntur.
                    Maxime, voluptatum vitae. Iste dolores hic nulla similique reiciendis debitis! Minus, saepe incidunt. Debitis mollitia, deserunt aliquid amet quae nesciunt esse cupiditate facilis temporibus nisi, officiis hic illo quis pariatur.</p>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Menu</h2>
                    <ul class="text-gray-300 font-normal">
                        <li class="mb-4">
                            <a href="" class="hover:underline">Beranda</a>
                        </li>
                        <li>
                            <a href="" class="hover:underline">Destinasi</a>
                        </li>
                        <li class="mb-4">
                            <a href="" class="hover:underline">Berita</a>
                        </li>
                        <li>
                            <a href="" class="hover:underline">Profil Desa</a>
                        </li>
                        <li class="mb-4">
                            <a href="" class="hover:underline">Kontak Kami</a>
                        </li>
                        <li>
                            <a href="" class="hover:underline">Pemesanan</a>
                        </li>
                        <li>
                            <a href="" class="hover:underline">Bahasa</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Media Sosial</h2>
                    <ul class="text-gray-300 font-normal">
                        <li class="mb-4"> 
                            <a href="#" class="text-gray-300 hover:text-white dark:hover:text-white flex items-center">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                    <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                                </svg> Facebook
                            </a>
                        </li>
                        <li>
                          <a href="#" class="text-gray-300 hover:text-white dark:hover:text-white  flex items-center">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/> 
                                </svg>Twitter
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-300 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2025 <a href="https://flowbite.com/" class="hover:underline">Desa Jatiluwih</a>. All Rights Reserved.
            </span>
            </div>
        </div>
    </footer>
    <!-- end footer -->

</body>
</html>
