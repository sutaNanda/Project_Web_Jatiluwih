<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <!-- start font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <!-- end font -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <style>
        .itim-regular {
            font-family: 'Itim', cursive;
            /* font-size: 14px; Ukuran font */
        }
    </style>
</head>


<script>
  window.addEventListener('scroll', function () {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
      navbar.classList.remove('bg-transparent');
      navbar.classList.add('bg-green-800', 'shadow-md'); // Ganti bg-white sesuai keinginan
    } else {
      navbar.classList.add('bg-transparent');
      navbar.classList.remove('bg-white', 'shadow-md');
    }
  });
</script>


<!-- <style>
    .swiper-button-prev:after,
    .swiper-rtl .swiper-button-next:after {
        content: '' !important;
    }

    .swiper-button-next:after,
    .swiper-rtl .swiper-button-prev:after {
        content: '' !important;
    }

    .swiper-button-next svg,
    .swiper-button-prev svg {
        width: 24px !important;
        height: 24px !important;
    }

    .swiper-button-next,
    .swiper-button-prev {
        position: relative !important;
        margin-top: 32px;
    }

    .swiper-slide.swiper-slide-active {
        --tw-border-opacity: 1 !important;
        border-color: rgb(79 70 229 / var(--tw-border-opacity)) !important;
    }

    .swiper-slide.swiper-slide-active>.swiper-slide-active\:text-indigo-600 {
        --tw-text-opacity: 1;
        color: rgb(79 70 229 / var(--tw-text-opacity));
    }

    .swiper-slide.swiper-slide-active>.flex .grid .swiper-slide-active\:text-indigo-600 {
        --tw-text-opacity: 1;
        color: rgb(79 70 229 / var(--tw-text-opacity));
    }
</style> -->


<body>
    <!-- navbar -->
    <nav class=" fixed w-full z-20 top-0 start-0 bg-transparent transition-all duration-300" id="navbar">
        <div class="max-w-screen-xl flex flex-wrap mx-auto p-4 justify-center items-center">
            <a href="/home" class="flex items-center space-x-3 rtl:space-x-reverse p-3 mr-9">
                <img src="{{ asset('img/logo.png') }}" alt="" class="w-12 h-12">
            </a>
            
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 font-normal">
                    <li>
                        <a href="/" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 "aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500">Destinasi</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500">Berita</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500">Profil Desa</a>
                    </li>
                    <li>
                        <a href="kontak" class="block py-2 px-3 text-white rounded-sm md:bg-transparent md:p-0 ">Kontak Kami</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 ">Pemesanan</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 ">Bahasa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- teks menu -->
    <section class="w-full h-screen flex items-center justify-center" style="background-image: url('{{ asset('img/img-8.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat">
    <div class="w-full h-full text-white items-center flex flex-col justify-center gap-10">
        <div class="text-center leading-tight">
            <!-- Ganti text-xl menjadi text-4xl atau lebih -->
            <h2 class="text-5xl itim-regular font-bold">Tanya Tentang Destinasi dan Pemesanan?<br>Hubungi Kami Segera!</h2>
        </div>
        <div>
            <!-- Ganti text-4xl menjadi text-6xl atau lebih -->
            <p class="itim-regular text-2xl">"We Embrace #TheEntranceofAncientJatiLuwih"</p>
        </div>
    </div>
    </section> 
    <!-- end teks menu -->


    <section class="bg-white py-16">
    <div class="max-w-screen-xl mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
    <!-- Kiri: Judul -->
        <div>
            <h2 class="text-5xl font-bold itim-regular text-black">Hubungi Kami</h2>
        </div>

    <!-- Kanan: Deskripsi -->
        <div>
        <p class="text-gray-600 text-justify itim-regular">
            Jatiluwih, Bali – Desa Wisata Jatiluwih, permata tersembunyi di Kabupaten Tabanan, Bali, bersiap menyambut delegasi Forum Air Dunia ke-10 yang akan diselenggarakan di Nusa Dua Bali, pada 18 hingga 24 Mei 2024.<br><br>

            Desa ini tidak hanya menawarkan pemandangan panorama sawah yang luas dan indah, tetapi juga budaya yang kaya, kearifan lokal, dan keramahan menawan dari masyarakatnya. Mari selami lebih dalam pesona Jatiluwih yang akan memikat para delegasi.
        </p>
        </div>
    </div>

    <div class="max-w-5xl mx-auto text-center">
        <!-- Ikon Sosial Media -->
        <div class="flex flex-wrap justify-center gap-32 mt-24">
        <a href="https://www.tiktok.com/@userkamu" target="_blank">
            <img src="{{ asset('img/img-tiktok.png') }}" alt="TikTok" class="w-16 h-16">
        </a>
        <a href="https://www.instagram.com/userkamu" target="_blank">
            <img src="{{ asset('img/img-instagram.png') }}" alt="Instagram" class="w-16 h-16">
        </a>
        <a href="mailto:emailkamu@gmail.com">
            <img src="{{ asset('img/img-gmail.png') }}" alt="Gmail" class="w-16 h-16">
        </a>
        <a href="https://wa.me/6281234567890" target="_blank">
            <img src="{{ asset('img/img-whatsapp.png') }}" alt="WhatsApp" class="w-16 h-16">
        </a>
        <a href="https://www.youtube.com/@userkamu" target="_blank">
            <img src="{{ asset('img/img-youtube.png') }}" alt="YouTube" class="w-16 h-16">
        </a>
        </div>
    </div>
    </section>
    
    <!-- Google Maps -->
    <section class="py-16 px-6 md:px-20 bg-white">
    <div class="w-full max-w-5xl mx-auto">
        <h2 class="text-5xl mb-8 text-center itim-regular">Google Maps</h2>
        <div class="w-full h-[450px] md:h-[600px] rounded-lg overflow-hidden shadow-lg">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63158.24758245827!2d115.09871446812693!3d-8.363194077396098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd227bedf45cc29%3A0x5030bfbca831a80!2sJatiluwih%2C%20Kec.%20Penebel%2C%20Kabupaten%20Tabanan%2C%20Bali!5e0!3m2!1sid!2sid!4v1746166069431!5m2!1sid!2sid"
            class="w-full h-full border-0"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        </div>
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
                    <p class="text-white text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum blanditiis sint omnis magni nesciunt quas nostrum magnam facere! Harum quo necessitatibus, minus inventore accusantium ullam nesciunt alias recusandae obcaecati. Consequuntur.
                    Maxime, voluptatum vitae. Iste dolores hic nulla similique reiciendis debitis! Minus, saepe incidunt. Debitis mollitia, deserunt aliquid amet quae nesciunt esse cupiditate facilis temporibus nisi, officiis hic illo quis pariatur.</p>
                </a>
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
                            <a href="kontak" class="hover:underline">Kontak Kami</a>
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
