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
            <div class="text-5xl text-center font-bold leading-tight">
                <h2 class="text-white capitalize text-5xl font" style="width: 700px; line-height: 90px">{{$deskripsi}}</h2>
            </div>
            <div>
                <p>"We Embrace #TheEntranceofAncientJatiLuwih"</p>
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

</body>
</html>