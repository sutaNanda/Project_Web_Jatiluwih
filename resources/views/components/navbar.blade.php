    <nav class=" fixed w-full z-20 top-0 start-0 bg-transparent transition-all duration-300" id="navbar">
        <div class="max-w-screen-xl flex flex-wrap mx-auto p-4 justify-center items-center">
            <a href="/home" class="flex items-center space-x-3 rtl:space-x-reverse p-3 mr-9">
                <img src="{{ asset('img/logo.png') }}" alt="" class="w-12 h-12">
            </a>
            
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 font-normal">
                    <li>
                        <a href="/home" class="md:hover:text-blue-700 block py-2 px-3 text-white rounded-sm md:bg-transparent md:p-0 " aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="/destinasi" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Destinasi</a>
                    </li>
                    <li>
                        <a href="/berita" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Berita</a>
                    </li>
                    <li>
                        <a href="/profil" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Profil Desa</a>
                    </li>
                    <li>
                        <a href="/kontak" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Kontak Kami</a>
                    </li>
                    <li>
                        <a href="/paket" class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Pemesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>