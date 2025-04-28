<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Swiper CSS -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>


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
</head>
<body>


<section class="py-24 ">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div
                class="flex justify-center items-center gap-y-8 lg:gap-y-0 flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8 max-w-sm sm:max-w-2xl lg:max-w-full mx-auto">
                <div class="w-full lg:w-2/5">
                    <span class="text-sm text-gray-500 font-medium mb-4 block">Testimonial</span>
                    <h2 class="text-4xl font-bold text-gray-900 leading-[3.25rem] mb-8">23k+ Customers gave their <span
                            class=" text-transparent bg-clip-text bg-gradient-to-tr from-indigo-600 to-violet-600">Feedback</span>
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
                    <div class="swiper mySwiper relative">
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
                                    <img class="rounded-full object-cover" src="	https://pagedone.io/asset/uploads/1696229994.png" alt="avatar">
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
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


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
        
        <!-- Swiper JS -->

    
</body>
</html>