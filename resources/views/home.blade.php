<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Desa Wisata Jatiluwih</title>
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
                        primary: '#ff6347',  // Ubah warna utama
                        secondary: '#4caf50',  // Ubah warna sekunder
                    },
                    spacing: {
                        '128': '32rem', // Menambahkan ukuran spacing custom
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
    <nav class=" fixed w-full z-20 top-0 start-0 bg-transparent transition-all duration-300" id="navbar">
        <div class="max-w-screen-xl flex flex-wrap mx-auto p-4 justify-center items-center">
            <a href="/home" class="flex items-center space-x-3 rtl:space-x-reverse p-3 mr-9">
                <img src="{{ asset('img/logo.png') }}" alt="" class="w-12 h-12">
            </a>
            
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 font-normal">
                    <li>
                        <a href="/home" class="block py-2 px-3 text-white rounded-sm md:bg-transparent md:p-0 " aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Destinasi</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Berita</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Profil Desa</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Kontak Kami</a>
                    </li>
                    <li>
                        <a href="/reservasi" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Pemesanan</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Bahasa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- section home -->
    <section class="w-full h-screen flex items-center justify-center" style="background-image: url('{{ asset('img/bg-1.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat">
        <div class="w-full h-full text-white items-center flex flex-col justify-center gap-4">
            <div class="text-6xl text-center font-bold leading-tight">
                <h2>Kami Merangkul<br>Keindahan Kuno Jatiluwih</h2>
            </div>
            <div>
                <p>Desa Wisata Jatiluwih, Kabupaten Tabanan, Provinsi Bali, Indonesia</p>
            </div>

            <div class="text-center border-2 border-green-800 py-2 px-4 bg-green-800 rounded-3xl mx-auto mt-10" >
                <a href="">Ayo Jelajahi Sekarang</a>
            </div>

        </div>
    </section>
    <!-- end section home -->

    <!-- section tentang kami -->
    <section class="w-full mt-7 p-12 flex items-center justify-center">
        <div class=" h-full p-2 flex justify-evenly" style="width: 95%;">
            <div class="w-2/5 h-full">
                <div class="w-full h-full flex items-center justify-center">
                    <img src="{{ asset('img/img-4.jpg') }}" alt="">
                </div>
                <div class="w-full h-full mt-10 text-justify">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa cumque similique aperiam eos, veritatis dignissimos! Modi veritatis dicta impedit at magni, ut tempora neque voluptates ipsam, libero delectus enim commodi?
                    A veniam, quo explicabo est recusandae magni quisquam beatae architecto sunt deleniti fugiat natus necessitatibus amet voluptatem aut odit magnam perspiciatis culpa? Labore cum ab commodi, reiciendis in enim. Voluptas.</p>
                </div>
                <button class="mt-24 text-center border-2 border-green-800 py-2 px-4 bg-green-800 rounded-xl mx-auto text-white font-normal">
                    <a href="">Lihat Lebih Lanjut</a>
                </button>
            
            </div>
            <div class="w-2/5 h-full">
                <div class="w-full h-full text-justify mb-10">
                    <h2 class="text-6xl font-bold mb-9">Tentang kami</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa cumque similique aperiam eos, veritatis dignissimos! Modi veritatis dicta impedit at magni, ut tempora neque voluptates ipsam, libero delectus enim commodi?
                    A veniam, quo explicabo est recusandae magni quisquam beatae architecto sunt deleniti fugiat natus necessitatibus amet voluptatem aut odit magnam perspiciatis culpa? Labore cum ab commodi, reiciendis in enim. Voluptas.</p>
                </div>
                <div class="w-full h-full flex items-center justify-center">
                    <img src="{{ asset('img/img-3.jpg') }}" alt="">
                </div>
            </div>

        </div>
        
    </section>
    <!-- end section tentang kami -->

    <!-- section destinasi -->
    <section class="w-fullp-12 flex items-center justify-center mt-5">
        <div class="w-full h-full p-2 flex justify-center flex-col">
            <div class="text-5xl text-center font-bold leading-tight capitalize">
                <h2>Destinasi Wisata populer <br> di desa Jatiluwih</h2>
            </div>

            <div class="w-full h-full flex items-center justify-evenly mt-10">
                <div class="max-w-64 bg-white border border-gray-200 rounded-lg shadow-sm">
                    <a href="#">
                        <img class="rounded-t-lg w-64 h-full" src="{{ asset('img/img-5.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Terasering Jatiluwih</h5>
                        </a>
                        <p class="mb-3 font-normal text-xs text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-800 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="max-w-64 bg-white border border-gray-200 rounded-lg shadow-sm">
                    <a href="#">
                        <img class="rounded-t-lg w-64 h-full" src="{{ asset('img/img-6.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Air Terjun Yeh Hoo</h5>
                        </a>
                        <p class="mb-3 font-normal text-xs text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-800 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="max-w-64 bg-white border border-gray-200 rounded-lg shadow-sm">
                    <a href="#">
                        <img class="rounded-t-lg w-64 h-full" src="{{ asset('img/img-7.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">Bendungan Yeh Aya Hulu</h5>
                        </a>
                        <p class="mb-3 font-normal text-xs text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit onsectetur adipisicing elit onsectetur adipisicing elit onsectetur adipisicing elit...</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-800 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section destinasi -->

    <!-- section paket -->
    <section>
        <div class="w-full h-full p-2 flex justify-center flex-col mt-20">
            <div class="text-5xl text-center font-bold leading-tight capitalize">
                <h2>Nikmati beragam paket <br> wisata di desa Jatiluwih</h2>
            </div>

            <div class="w-full h-full flex items-center justify-evenly mt-10">
                
                <div class="w-full max-w-72 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="p-8 rounded-t-lg" src="{{ asset('img/img-5.jpg') }}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Terasering Jatiluwih</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                            </div>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-3">Populer</span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-3">12 jam</span>
                        </div>
                        <div class="flex items-center flex-wrap">
                            <span class="text-2xl font-bold text-gray-900 dark:text-white">IDR 200.000/pax</span>
                            <a href="#" class="text-white bg-green-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-4">Lihat Paket</a>
                        </div>
                    </div>
                </div>

                <div class="w-full max-w-72 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="p-8 rounded-t-lg" src="{{ asset('img/img-6.jpg') }}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Air Terjun Yeh Hoo</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                            </div>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-3">Populer</span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-3">12 jam</span>
                        </div>
                        <div class="flex items-center flex-wrap">
                            <span class="text-2xl font-bold text-gray-900 dark:text-white">IDR 200.000/pax</span>
                            <a href="#" class="text-white bg-green-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-4">Lihat Paket</a>
                        </div>
                    </div>
                </div>

                <div class="w-full max-w-72 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="p-8 rounded-t-lg" src="{{ asset('img/img-7.png') }}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Bendungan Yeh Aya Hulu</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                            </div>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-3">Populer</span>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-3">12 jam</span>
                        </div>
                        <div class="flex items-center flex-wrap">
                            <span class="text-2xl font-bold text-gray-900 dark:text-white">IDR 200.000/pax</span>
                            <a href="#" class="text-white bg-green-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-4">Lihat Paket</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end section paket -->

    <!-- section testimoni -->
    <section class="py-24 ">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div
                class="flex justify-center items-center gap-y-8 lg:gap-y-0 flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8 max-w-sm sm:max-w-2xl lg:max-w-full mx-auto">
                <div class="w-full lg:w-2/5">
                    <span class="text-4xl text-gray-500 font-medium mb-4 block">Testimonial</span>
                    <h2 class="text-4xl font-bold text-gray-900 leading-[3.25rem] mb-8">Cerita Dari Meraka Yang Pernah Singgah <br><span
                            class=" text-transparent bg-clip-text bg-gradient-to-tr from-indigo-600 to-violet-600">Ke Desa Jatiluwih</span>
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
                            
                            <div class="swiper-slide group bg-white border border-solid border-gray-300 rounded-2xl max-sm:max-w-sm max-sm:mx-auto p-6 transition-all duration-500 hover:border-indigo-600">
                                <div class="flex items-center gap-5 mb-5 sm:mb-9">
                                    <img class="rounded-full object-cover" src="https://pagedone.io/asset/uploads/1696229969.png" alt="avatar">
                                    <div class="grid gap-1">
                                        <h5 class="text-gray-900 font-medium transition-all duration-500  ">Jane D</h5>
                                        <span class="text-sm leading-6 text-gray-500">CEO </span>
                                    </div>
                                </div>
                                <p
                                    class="text-sm text-gray-500 leading-6 transition-all duration-500 min-h-24  group-hover:text-gray-800">
                                    The user interface of this pagedone is so intuitive, I was able to start using it
                                    without any guidance.
                                </p>

                            </div>
                            <div
                                class="swiper-slide group bg-white border border-solid border-gray-300 rounded-2xl max-sm:max-w-sm max-sm:mx-auto p-6 transition-all duration-500 hover:border-indigo-600">
                                <div class="flex items-center gap-5 mb-5 sm:mb-9">
                                    <img class="rounded-full object-cover" src="https://pagedone.io/asset/uploads/1696229994.png" alt="avatar">
                                    <div class="grid gap-1">
                                        <h5 class="text-gray-900 font-medium transition-all duration-500  ">Harsh P.
                                        </h5>
                                        <span class="text-sm leading-6 text-gray-500">Product Designer </span>
                                    </div>
                                </div>
                                <p
                                    class="text-sm text-gray-500 leading-6 transition-all duration-500 min-h-24 group-hover:text-gray-800">
                                    I used to dread doing my taxes every year, but pagedone has made the process so much
                                    simpler and stress-free.
                                </p>

                            </div>
                            <div
                                class="swiper-slide group bg-white border border-solid border-gray-300 rounded-2xl max-sm:max-w-sm max-sm:mx-auto p-6 transition-all duration-500 hover:border-indigo-600">
                                <div class="flex items-center gap-5 mb-5 sm:mb-9">
                                    <img class="rounded-full object-cover" src="https://pagedone.io/asset/uploads/1696229969.png" alt="avatar">
                                    <div class="grid gap-1">
                                        <h5 class="text-gray-900 font-medium transition-all duration-500  ">Jane D</h5>
                                        <span class="text-sm leading-6 text-gray-500">CEO </span>
                                    </div>
                                </div>
                                <p
                                    class="text-sm text-gray-500 leading-6 transition-all duration-500 min-h-24 group-hover:text-gray-800">
                                    The user interface of this pagedone is so intuitive, I was able to start using it
                                    without any guidance.
                                </p>

                            </div>
                            <div
                                class="swiper-slide group bg-white border border-solid border-gray-300 rounded-2xl max-sm:max-w-sm max-sm:mx-auto p-6 transition-all duration-500 hover:border-indigo-600">
                                <div class="flex items-center gap-5 mb-5 sm:mb-9">
                                    <img class="rounded-full object-cover" src="https://pagedone.io/asset/uploads/1696229994.png" alt="avatar">
                                    <div class="grid gap-1">
                                        <h5 class="text-gray-900 font-medium transition-all duration-500  ">Harsh P.
                                        </h5>
                                        <span class="text-sm leading-6 text-gray-500">Product Designer </span>
                                    </div>
                                </div>
                                <p
                                    class="text-sm text-gray-500 leading-6 transition-all duration-500 min-h-24 group-hover:text-gray-800">
                                    I used to dread doing my taxes every year, but pagedone has made the process so much
                                    simpler and stress-free.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section testimoni -->

    <!-- footer -->
    <footer class="bg-green-800 mt-32">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="" class="flex items-center flex-wrap w-96">
                    <img src="{{ asset('img/logo.png') }}" class="h-8 me-3" alt="" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Desa Wisata Jatiluwih</span>
                    <p class="text-white text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum blanditiis sint omnis magni nesciunt quas nostrum magnam facere! Harum quo necessitatibus, minus inventore accusantium ullam nesciunt alias recusandae obcaecati. Consequuntur.
                    Maxime, voluptatum vitae. Iste dolores hic nulla similique reiciendis debitis! Minus, saepe incidunt. Debitis mollitia, deserunt aliquid amet quae nesciunt esse cupiditate facilis temporibus nisi, officiis hic illo quis pariatur.</p>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase">Menu</h2>
                    <ul class="text-gray-300 font-normal">
                        <li class="mb-4">
                            <a href="/home" class="hover:underline">Beranda</a>
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
                            <a href="/reservasi" class="hover:underline">Pemesanan</a>
                        </li>
                        <li>
                            <a href="" class="hover:underline">Bahasa</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase">Media Sosial</h2>
                    <ul class="text-gray-300 font-normal">
                        <li class="mb-4"> 
                            <a href="https://www.facebook.com/" target="_blank"  rel="noopener noreferrer" class="text-gray-300 hover:text-white flex items-center">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                    <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                                </svg> Facebook
                            </a>
                        </li>
                        <li class="mb-4">
                          <a href="https://x.com/" target="_blank"  rel="noopener noreferrer" class="text-gray-300 hover:text-white flex items-center">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/> 
                                </svg> Twitter
                            </a>
                        </li>
                        <li class="mb-4">
                          <a href="https://www.instagram.com/" target="_blank"  rel="noopener noreferrer" class="text-gray-300 hover:text-white flex items-center m">
                               <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#ffffff"></path> <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="#ffffff"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" fill="#D1D5DB"></path> </g></svg>
                                Instagram
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase">Kontak</h2>
                    <ul class="text-gray-300 font-medium">
                        <li class="mb-4">
                            <p class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg> +62 877-8883-7494
                            </p>
                        </li>
                        <li>
                            <p class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"    class="size-6 ">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                </svg> yepoganteng338@gmail.com
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-autolg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-white sm:text-center">© 2025 <a href="https://flowbite.com/" class="hover:underline">Desa Jatiluwih</a>. All Rights Reserved.
            </span>
            </div>
        </div>
    </footer>
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