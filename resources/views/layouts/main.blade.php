<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Desa Wisata Jatiluwih</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="icon" href="{{ asset('img/logo-1.ico') }}" type=".Image/x-icons">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

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

    <style>
        .hero-bg {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url('{{$bg}}'); /* Default untuk desktop */

        }

        .hero-h2{
            line-height: 90px;
        }

        @media (max-width: 640px) {
        .hero-bg {
            background-image:linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.5)),
            url('{{ asset('img/img-mobile-1.jpg') }}'); 
            background-position: center; 
            opacity: 10;}
        }

        .hero-h2{
            line-height: 60px;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <x-navbar></x-navbar>

    <!-- end navbar -->

    <!-- section home -->
    <section class="relative w-full  md:h-screen flex flex-col justify-between">
        <div class="pt-60 px-4 pl-6 text-white drop-shadow-md md:text-center md:items-center flex flex-col md:justify-center gap-4 hero-bg md:w-full h-screen md:h-screen md:pt-10">
            <div class="font-bold w-5/6 md:flex md:justify-center">
                <h2 class="text-white capitalize text-4xl md:text-5xl md:w-[850px] hero-h2">{{$deskripsi}}</h2>
            </div>
            <div>
                <p class="text-white text-md md:text-xl">"We Embrace #TheEntranceofAncientJatiLuwih"</p>
            </div>
        </div>
    </section>
    <!-- end section home -->
    
    <section>
        @yield('content2')
    </section>

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

</body>
</html>