@extends('layouts.main')

@section('content2')
    <section class="bg-white py-16">
        <div class="max-w-screen-xl mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
        <!-- Kiri: Judul -->
            <div>
                <h2 class="text-5xl font-bold itim-regular text-black">Hubungi Kami</h2>
            </div>

        <!-- Kanan: Deskripsi -->
            <div>
            <p class="text-gray-600 text-justify itim-regular">
                Jatiluwih, Bali – Desa Wisata Jatiluwih, permata tersembunyi di Kabupaten Tabanan, Bali, bersiap menyambut delegasi Forum Air Dunia ke-10 yang akan diselenggarakan di Nusa Dua Bali, pada 18 hingga 24 Mei 2024.<br><br>

                Desa ini tidak hanya menawarkan pemandangan panorama sawah yang luas dan indah, tetapi juga budaya yang kaya, kearifan lokal, dan keramahan menawan dari masyarakatnya. Mari selami lebih dalam pesona Jatiluwih yang akan memikat para delegasi.
            </p>
            </div>
        </div>

        <div class="max-w-5xl mx-auto text-center">
            <!-- Ikon Sosial Media -->
            <div class="flex flex-wrap justify-center gap-32 mt-24">
            <a href="https://www.tiktok.com/@userkamu" target="_blank">
                <img src="{{ asset('img/img-tiktok.png') }}" alt="TikTok" class="w-16 h-16">
            </a>
            <a href="https://www.instagram.com/userkamu" target="_blank">
                <img src="{{ asset('img/img-instagram.png') }}" alt="Instagram" class="w-16 h-16">
            </a>
            <a href="mailto:emailkamu@gmail.com">
                <img src="{{ asset('img/img-gmail.png') }}" alt="Gmail" class="w-16 h-16">
            </a>
            <a href="https://wa.me/6281234567890" target="_blank">
                <img src="{{ asset('img/img-whatsapp.png') }}" alt="WhatsApp" class="w-16 h-16">
            </a>
            <a href="https://www.youtube.com/@userkamu" target="_blank">
                <img src="{{ asset('img/img-youtube.png') }}" alt="YouTube" class="w-16 h-16">
            </a>
            </div>
        </div>
    </section>
    
    <!-- Google Maps -->
    <section class="py-16 px-6 md:px-20 bg-white">
        <div class="w-full max-w-5xl mx-auto">
            <h2 class="text-5xl mb-8 text-center itim-regular">Google Maps</h2>
            <div class="w-full h-[450px] md:h-[600px] rounded-lg overflow-hidden shadow-lg">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63158.24758245827!2d115.09871446812693!3d-8.363194077396098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd227bedf45cc29%3A0x5030bfbca831a80!2sJatiluwih%2C%20Kec.%20Penebel%2C%20Kabupaten%20Tabanan%2C%20Bali!5e0!3m2!1sid!2sid!4v1746166069431!5m2!1sid!2sid"
                class="w-full h-full border-0"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            </div>
        </div>
    </section>

@endsection