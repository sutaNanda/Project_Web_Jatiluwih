<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Desa Wisata Jatiluwih</title>
    <link rel="icon" href="{{ asset('img/logo-1.ico') }}" type=".Image/x-icons">

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
    <x-navbar></x-navbar>
    <!-- end navbar -->

    <!-- teks menu -->
    <section class="w-full h-screen flex items-center justify-center" style="background-image: url('{{ asset('img/bg-1.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat">
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
    <x-footer></x-footer>
    <!-- end footer -->

</body>
</html>
