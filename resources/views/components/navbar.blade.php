    
<nav class="fixed w-full z-20 top-0 start-0 transition-all duration-300" id="navbar">
    <div class="max-w-screen-xl w-full flex flex-wrap items-center mx-auto p-4 justify-between md:justify-center">
        <a href="/home" class="flex items-center space-x-3 rtl:space-x-reverse p-1">
            <img src="{{ asset('img/logo.png') }}" class="w-[50px] h-[50px]" alt="Logo Desa" />
            <div class="flex items-center justify-center mr-4">
                <p class="text-white sm:text-xl font-semibold md:hidden">Desa Wisata Jatiluwih</p>
            </div>
        </a>


        <!-- Tombol menu toggle hanya muncul di HP/tablet -->
        <button data-collapse-toggle="navbar-mobile" type="button"
            class="inline-flex items-center p-2 w-12 h-12 justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-300 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-mobile" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>

        <!-- Menu -->
        <div class="hidden w-full md:flex md:w-auto sm:w-auto" id="navbar-mobile">
            <ul class="flex flex-col mt-4 p-1 font-normal border border-gray-100 rounded-lg bg-gray-50 md:bg-transparent md:flex-row md:space-x-8 md:mt-0 md:border-0  md:dark:bg-transparent">
                <li>
                    <a href="/home" class="block py-2 text-gray-800 md:text-white md:hover:text-blue-500 hover:bg-gray-100 rounded-md md:hover:bg-transparent">Beranda</a>
                </li>
                <li>
                    <a href="/destinasi" class="block py-2 text-gray-800 md:text-white md:hover:text-blue-500 hover:bg-gray-100 rounded-md md:hover:bg-transparent">Destinasi</a>
                </li>
                <li>
                    <a href="/berita" class="block py-2 text-gray-800 md:text-white md:hover:text-blue-500 hover:bg-gray-100 rounded-md md:hover:bg-transparent">Berita</a>
                </li>
                <li>
                    <a href="/profil" class="block py-2 text-gray-800 md:text-white md:hover:text-blue-500 hover:bg-gray-100 rounded-md md:hover:bg-transparent">Profil Desa</a>
                </li>
                <li>
                    <a href="/kontak" class="block py-2 text-gray-800 md:text-white md:hover:text-blue-500 hover:bg-gray-100 rounded-md md:hover:bg-transparent">Kontak Kami</a>
                </li>
                <li>
                    <a href="/paket" class="block py-2 text-gray-800 md:text-white md:hover:text-blue-500 hover:bg-gray-100 rounded-md md:hover:bg-transparent">Pemesanan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    
<script>
    const toggleBtn = document.querySelector('[data-collapse-toggle]');
    const targetMenu = document.getElementById(toggleBtn.getAttribute('data-collapse-toggle'));

    toggleBtn.addEventListener('click', () => {
        targetMenu.classList.toggle('hidden');
    });
</script>

<script>
    const navbar = document.getElementById('navbar');

    if (window.innerWidth < 640) { // di bawah breakpoint sm
        navbar.classList.add('bg-green-800', 'border-b', 'border-gray-600');
        navbar.classList.remove('bg-transparent');

    }
</script>
