<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Desa Wisata Jatiluwih</title>
    
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link rel="icon" href="{{ asset('img/logo-1.ico') }}" type=".Image/x-icons">

    <!-- <link rel="stylesheet" href="{{ asset('css/testimoni.css') }}"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


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
    <section class="w-full h-screen flex items-center justify-center" style="background-image: url('{{$bg}}'); background-size: cover; background-position: center; background-repeat: no-repeat">
        <div class="w-full h-full text-white items-center flex flex-col justify-center gap-4">
            <div class="text-6xl text-center font-bold leading-tight">
                <h2>Kami Merangkul<br>Keindahan Kuno Jatiluwih</h2>
            </div>
            <div>
                <p>Desa Wisata Jatiluwih, Kabupaten Tabanan, Provinsi Bali, Indonesia</p>
            </div>

            <div class="text-center border-2 border-green-800 py-2 px-4 bg-green-800 rounded-3xl mx-auto mt-10">
                <a href="#about" onclick="document.getElementById('about').scrollIntoView({ behavior: 'smooth' }); return false;">Ayo Jelajahi Sekarang</a>
            </div>

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
    <section class="py-24" id="testimoni">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div
                class="flex justify-center items-center gap-y-8 lg:gap-y-0 flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8 max-w-sm sm:max-w-2xl lg:max-w-full mx-auto">
                <div class="w-full lg:w-2/5">
                    <span class="text-4xl text-violet-800 font-medium mb-4 block">Testimonial</span>
                    <h2 class="text-4xl font-bold text-gray-900 leading-[3.25rem] mb-8">Cerita Dari Meraka Yang Pernah Singgah <br><span
                            class=" text-transparent bg-clip-text bg-gradient-to-tr from-green-800 to-green-800">Ke Desa Jatiluwih</span>
                    </h2>
                    <!-- Slider controls -->
                    <div class="flex items-center justify-center lg:justify-start gap-10">
                        <button id="slider-button-left"
                            class="swiper-button-prev group flex justify-center items-center border border-solid border-indigo-600 w-12 h-12 transition-all duration-500 rounded-lg hover:bg-indigo-600"
                            data-carousel-prev>
                            <svg class="h-6 w-6 text-indigo-600 group-hover:text-white" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.9999 12L4.99992 12M9.99992 6L4.70703 11.2929C4.3737 11.6262 4.20703 11.7929 4.20703 12C4.20703 12.2071 4.3737 12.3738 4.70703 12.7071L9.99992 18"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                        </button>
                        <button id="slider-button-right"
                            class="swiper-button-next group flex justify-center items-center border border-solid border-indigo-600 w-12 h-12 transition-all duration-500 rounded-lg hover:bg-indigo-600"
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
                                        <p class="text-indigo-700 text-sm font-semibold">Paket: {{ $testimoni->paket->nama_paket ?? '-' }}</p>
                                        <p class="text-gray-700 text-sm">Email: {{ $testimoni->email }}</p>
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