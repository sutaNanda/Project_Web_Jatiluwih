<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Desa Wisata Jatiluwih</title>
    <link rel="icon" href="{{ asset('img/logo-1.ico') }}" type=".Image/x-icons">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body>
    <!-- navbar -->
    <x-navbar></x-navbar>
    <!-- end navbar -->

    <!-- section home -->
    <section class="w-full h-screen flex items-center justify-center" style="background-image: url('{{ asset('img/img-13.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat">
        <div class="w-full h-full text-white items-center flex flex-col justify-center gap-4">
            <div class="text-6xl text-center font-bold leading-tight capitalize">
                <h2>tentang desa wisata jatiluwih</h2>
            </div>
            <div>
                <p>"We Embrace #TheBeutyofAncientJatiluwih"</p> 
            </div>

        </div>
    </section>
    <!-- end section home -->

    <!-- About Section -->
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
    
    <!-- Video Section -->
    <section class="bg-gray-100 py-20 text-center">
        <div class="w-full max-w-xl mx-auto">
            <iframe class="w-full h-[300px] rounded" src="https://www.youtube.com/embed/h6P48pYuUww?start=198" frameborder="0" allowfullscreen>

            </iframe>
        </div>
    </section>


   <!-- Visi Misi Section -->
    <section class="bg-white py-16 px-4">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4 text-black-700">Visi</h2>
                <p class="text-lg text-gray-700">“Catur Swadharmaning Desa Jatiluwih”</p>
                <p class="mt-4 text-gray-600">Mewujudkan Desa Jatiluwih yang mandiri, harmonis, dan berkelanjutan dengan mengembangkan sektor pariwisata berbasis budaya dan pelestarian alam.</p>
            </div>
    
            <div class="text-center">
                <h2 class="text-4xl font-bold mb-6 text-black-700">Misi</h2>
            </div>
    
            <div class="flex justify-center">
                <ul class="list-disc list-inside text-gray-700 text-lg space-y-4">
                    <li>Mewujudkan tata kelola pemerintahan desa yang transparan, bersih, dan mandiri.</li>
                    <li>Mengembangkan pola pembangunan desa berbasis masyarakat yang berkelanjutan.</li>
                    <li>Membina kemasyarakatan desa yang berlandaskan kemandirian dan keharmonisan.</li>
                    <li>Memberdayakan masyarakat desa menuju masyarakat yang maju dan mandiri.</li>
                </ul>
            </div>

        </div>
    </section>


 <!-- Galeri Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Galeri Desa</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Loop through 16 images -->
            @for ($i = 1; $i <= 12; $i++)
                <div class="relative overflow-hidden">
                    <img class="w-full h-40 object-cover transform transition duration-300 hover:scale-110" 
                         src="{{ asset('img/gallery-' . $i . '.jpg') }}" alt="gallery {{ $i }}">
                </div>
            @endfor
        </div>
    </div>
</section>


     <!-- footer -->
    <x-footer></x-footer>
    <!-- end footer -->

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
  function toggleContent() {
    const content = document.getElementById('extra-content');
    const button = document.getElementById('toggle-button');

    if (content.classList.contains('hidden')) {
      content.classList.remove('hidden');
      button.textContent = 'Lihat Lebih Sedikit';
    } else {
      content.classList.add('hidden');
      button.textContent = 'Lihat Lebih Lanjut';
    }
  }
</script>
</body>
</html>