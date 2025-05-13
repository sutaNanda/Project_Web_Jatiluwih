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
                        <a href="/profil" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Profil Desa</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Kontak Kami</a>
                    </li>
                    <li>
                        <a href="/reservasi" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Pemesanan</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Bahasa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
    <section class="max-w-6xl mx-auto px-4 py-16">
  <div class="grid md:grid-cols-2 gap-10 items-start">
    <!-- Gambar utama -->
    <div class="flex justify-center">
    <img src="/img/img-5.jpg" alt="Tentang Jatiluwih"
    class="w-[350px] aspect-[3/4] object-cover rounded-lg shadow mb-6" />
    </div>

<!-- Deskripsi dan gambar tambahan --> 
<div>
  <h2 class="text-3xl font-bold mb-4">Tentang Kami</h2>
  <p class="mb-6">
    Jatiluwih adalah desa yang berada di kecamatan Penebel, Kabupaten Tabanan, provinsi Bali, Indonesia.
    Jatiluwih merupakan desa wisata, dengan panorama yang indah disertai dengan sawah berundak.
  </p>
  <img src="/img/img-1.jpg" alt="Pemandangan Sawah" class="w-[300px] rounded-lg shadow mb-6" />
  <p class="mb-6">
    Sejak tahun 2000, Jatiluwih menjadi daerah tujuan wisata terutama yang menyukai keindahan alam.
    Pengunjung bisa menikmati suasana segar, karena sepanjang hari udara di Jatiluwih tidak pernah panas melebihi 20 derajat celsius.
  </p>
  <p class="mb-6">
    Selain pesona alamnya, desa ini juga mencerminkan keharmonisan antara manusia dan lingkungan melalui sistem pertanian berkelanjutan.
    Kehidupan masyarakat lokal sangat erat dengan filosofi Tri Hita Karana, yang mengedepankan keseimbangan antara Tuhan, manusia, dan alam.
  </p>

  <!-- Konten tambahan -->
  <div id="extra-content" class="mt-4 hidden">
    <p class="mb-4">
      Desa ini juga terkenal karena sistem irigasi tradisionalnya yang disebut <em>subak</em>, yang telah diakui sebagai Warisan Budaya Dunia oleh UNESCO.
      Selain keindahan sawahnya, Jatiluwih juga menawarkan jalur trekking dan bersepeda, cocok bagi wisatawan pencinta alam dan petualangan.
    </p>
    <p class="mb-4">
      Masyarakat Jatiluwih juga masih memegang kuat adat dan tradisi lokal, yang membuat kunjungan ke desa ini tidak hanya menyegarkan secara fisik, tetapi juga kaya secara budaya.
    </p>
    <p>
      Wisatawan juga dapat menikmati kuliner khas Bali di warung-warung lokal serta menyaksikan upacara adat yang masih rutin dilakukan.
      Ini memberikan pengalaman autentik tentang kehidupan pedesaan Bali yang sesungguhnya.
    </p>
  </div>

  <!-- Tombol toggle -->
  <button id="toggle-button" onclick="toggleContent()" class="mt-4 px-6 py-2 bg-green-700 text-white rounded hover:bg-green-800">
    Lihat Lebih Lanjut
  </button>

    </div>
  </div>
</section>


  <!-- Video Section -->
<section class="bg-gray-100 py-20 text-center">
<div class="w-full max-w-xl mx-auto">
    <iframe class="w-full h-[300px] rounded" 
        src="https://www.youtube.com/embed/h6P48pYuUww?start=198" 
        frameborder="0" 
        allowfullscreen>
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
    
    <ul class="list-disc list-inside text-gray-700 text-lg space-y-4">
      <li>Mewujudkan tata kelola pemerintahan desa yang transparan, bersih, dan mandiri.</li>
      <li>Mengembangkan pola pembangunan desa berbasis masyarakat yang berkelanjutan.</li>
      <li>Membina kemasyarakatan desa yang berlandaskan kemandirian dan keharmonisan.</li>
      <li>Memberdayakan masyarakat desa menuju masyarakat yang maju dan mandiri.</li>
    </ul>
  </div>
</section>


 <!-- Galeri Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Galeri Desa</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Loop through 16 images -->
            @for ($i = 1; $i <= 16; $i++)
                <div class="relative overflow-hidden">
                    <img class="w-full h-40 object-cover transform transition duration-300 hover:scale-110" 
                         src="{{ asset('img/gallery-' . $i . '.jpg') }}" alt="gallery {{ $i }}">
                </div>
            @endfor
        </div>
    </div>
</section>


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
                            <a href="/profil" class="hover:underline">Profil Desa</a>
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