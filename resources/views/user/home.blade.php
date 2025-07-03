<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Desa Wisata Jatiluwih</title>
    <link rel="icon" href="{{ asset('img/logo-1.ico') }}" type=".Image/x-icons">

    {{-- tailwind --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    {{-- swiper testimoni --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
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

        .hero-bg {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url('{{$bg}}'); /* Default untuk desktop */
        }

        @media (max-width: 640px) {
        .hero-bg {
            background-image:linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.5)),
            url('{{ asset('img/img-3.jpg') }}'); 
            background-position: left; 
            opacity: 10;}
        }
    </style>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#ff6347',  
                        secondary: '#4caf50',  
                    },
                    spacing: {
                        '128': '32rem', 
                    },
                    width: {
                    }
                },
            },
        }
    </script>
</head>
<body>
    <!-- navbar -->
    <x-navbar></x-navbar>

    <!-- end navbar -->

    <!-- section home -->
    <section class="relative w-full h-screen flex flex-col justify-between hero-bg" >

        <!-- Judul di atas -->
        <div class="pt-50 md:pt-44 px-4 pl-6 text-white drop-shadow-md  md:text-center">
            <h2 class="text-3xl w-3/4 sm:text-4xl md:w-full md:text-6xl font-bold">Kami Merangkul</h2>
            <h2 class="text-4xl w-3/4e mt-2 sm:text-4xl md:w-full md:text-6xl md:mt-4 font-bold">Keindahan Kuno Jatiluwih</h2>
            <p class="mt-3 w-2/3 text-md sm:text-lg md:w-full md:text-xl font-semibold">Desa Wisata Jatiluwih, Kabupaten Tabanan, Bali</p>
        </div>

        <!-- Tombol di bawah -->
        <div class="pb-28 md:pb-36 px-4 flex justify-center">
            <a href="#about"
            onclick="document.getElementById('about').scrollIntoView({ behavior: 'smooth' }); return false;"
            class="bg-green-800 text-white font-bold py-3 px-6 rounded-full shadow-lg text-center hover:bg-green-700 transition-colors ">
                Ayo Jelajahi Sekarang
            </a>
        </div>
    </section>

    <!-- end section home -->

    <!-- section tentang kami -->
    @include('partials.about-section')    
    <!-- end section tentang kami -->

    <!-- section destinasi -->
    @include('partials.destinasi-section')    
    <!-- end section destinasi -->

    <!-- section paket -->
    @include('partials.reservasi-section')
    <!-- end section paket -->

    <!-- section testimoni -->
    <section class="pt-10 px-4" id="testimoni">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div
                class="flex justify-center items-center gap-y-8 lg:gap-y-0 flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8 max-w-sm sm:max-w-2xl lg:max-w-full mx-auto">
                <div class="w-full lg:w-2/5">
                    <span class="text-xl mb-1 md:text-4xl text-violet-800 font-medium md:mb-4 block">Testimonial</span>
                    <h2 class="text-lg md:text-4xl -mb-2 font-bold text-gray-900 md:leading-[3.25rem] md:mb-8">Cerita Dari Meraka Yang Pernah Singgah <br><span
                        class=" text-transparent bg-clip-text bg-gradient-to-tr from-green-800 to-green-800">Ke Desa Jatiluwih</span>
                    </h2>
                    <!-- Slider controls -->
                    <div class="flex items-center justify-center lg:justify-start gap-10">
                        <button id="slider-button-left"
                            class="swiper-button-prev group flex justify-center items-center border border-solid border-indigo-600 transition-all duration-500 rounded-lg hover:bg-indigo-600"
                            data-carousel-prev>
                            <svg class=" text-indigo-600 group-hover:text-white" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.9999 12L4.99992 12M9.99992 6L4.70703 11.2929C4.3737 11.6262 4.20703 11.7929 4.20703 12C4.20703 12.2071 4.3737 12.3738 4.70703 12.7071L9.99992 18"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                        </button>
                        <button id="slider-button-right"
                            class="swiper-button-next group flex justify-center items-center border border-solid border-indigo-600 transition-all duration-500 rounded-lg hover:bg-indigo-600"
                            data-carousel-next>
                            <svg class="h-6 w-6 text-indigo-600 group-hover:text-white" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 12L19 12M14 18L19.2929 12.7071C19.6262 12.3738 19.7929 12.2071 19.7929 12C19.7929 11.7929 19.6262 11.6262 19.2929 11.2929L14 6"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-3/5">
                    <!--Slider wrapper-->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach($testimonis as $testimoni)
                                <div class="swiper-slide bg-white border-1 border-gray-200 rounded-xl max-w-md mx-auto p-5 shadow-md hover:shadow-lg transition duration-300">
                                    <!-- Foto Kunjungan -->
                                    <div class="mb-4 rounded-lg overflow-hidden">
                                        <img src="{{ asset('gambar/' . $testimoni->gambar) }}" alt="Foto Kunjungan"
                                            class="w-full h-48 object-cover transition-transform duration-300 hover:scale-105">
                                    </div>

                                    <!-- Info Testimoni -->
                                    <div class="mb-2">
                                        <p class="text-indigo-700 text-sm font-semibold">{{ $testimoni->paket->nama_paket ?? '-' }}</p>
                                        <p class="text-gray-700 text-sm">Email: {{ $testimoni->email }}</p>
                                        
                                        <!-- Rating Bintang -->
                                        <div class="flex items-center gap-1 mt-1">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $testimoni->rating)
                                                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 22 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 
                                                            1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 
                                                            1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 
                                                            2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 
                                                            2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 
                                                            .387-1.575Z" />
                                                    </svg>
                                                @else
                                                    <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 22 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 
                                                            1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 
                                                            1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 
                                                            2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 
                                                            2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 
                                                            .387-1.575Z" />
                                                    </svg>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>

                                    <!-- Komentar -->
                                    <div class="text-gray-800 text-sm leading-relaxed border-t border-gray-100 pt-3">
                                        <p class="italic">“{{ $testimoni->pesan }}”</p>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section testimoni -->

    <!-- footer -->
    <x-footer></x-footer>

    <!-- end footer -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        window.addEventListener('scroll', function () {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('md:bg-green-800', 'md:backdrop-blur-xs');
                navbar.classList.add('md:bg-opacity-50'); 
                navbar.classList.add('md:border-b-1', 'md:border-gray-600');
                navbar.classList.remove('md:bg-transparent');
                
            } else if (window.scrollY === 0) {
                // navbar.classList.add('bg-transparent');
                navbar.classList.remove('md:backdrop-blur-xs');
                navbar.classList.remove('md:bg-opacity-30');
                navbar.classList.remove('md:border-1');
            }else {
                navbar.classList.add('border-0');
                navbar.classList.add('md:bg-transparent');
                navbar.classList.add('sm:bg-green-800');
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