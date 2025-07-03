@extends('layouts.main')

@section('content2')

<!-- Section: Judul & Deskripsi -->
<section class="bg-white py-20">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <!-- Kiri: Judul -->
        <div>
            <h2 class="text-5xl font-extrabold text-green-800 leading-tight mb-6">Hubungi Kami</h2>
            <p class="text-gray-700 text-lg leading-relaxed">
                Jatiluwih, Bali – Desa Wisata Jatiluwih adalah permata tersembunyi di Kabupaten Tabanan, Bali, yang siap menyambut delegasi Forum Air Dunia ke-10. Dengan panorama sawah yang luas dan budaya yang kaya, desa ini memikat dengan keramahan lokal dan kearifan tradisional.
            </p>
        </div>

        <!-- Kanan: Ilustrasi atau Gambar -->
        <div class="rounded-xl overflow-hidden shadow-lg">
            <img src="{{ asset('img/profil2.jpg') }}" alt="Desa Jatiluwih" class="w-full h-96 object-cover">
        </div>
    </div>
</section>

<!-- Section: Ikon Sosial Media -->
<section class="bg-gray-50 py-20">
    <div class="max-w-4xl mx-auto text-center">
        <h3 class="text-4xl font-semibold text-gray-800 mb-14 md:text-5xl">Temui Kami di Media Sosial</h3>
        <div class="flex flex-wrap justify-center gap-8 md:gap-24">
            @php
                $sosials = [
                    ['img' => 'img-tiktok.png', 'link' => 'https://www.tiktok.com/@byoki_no', 'alt' => 'TikTok'],
                    ['img' => 'img-instagram.png', 'link' => 'https://www.instagram.com/ekomplitz', 'alt' => 'Instagram'],
                    ['img' => 'img-whatsapp.png', 'link' => 'https://wa.me/6287863014568', 'alt' => 'WhatsApp'],
                    ['img' => 'img-youtube.png', 'link' => 'https://www.youtube.com/@tayaysam', 'alt' => 'YouTube'],
                ];
            @endphp

            @foreach ($sosials as $sosial)
                <a href="{{ $sosial['link'] }}" target="_blank" class="transition-transform transform hover:scale-110">
                    <img src="{{ asset('img/' . $sosial['img']) }}" alt="{{ $sosial['alt'] }}" class="w-16 h-16 md:w-24 md:h-24">
                </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Section: Form Kontak -->
<section class="bg-green-100 py-20">
    <div class="max-w-4xl mx-auto px-6">
        <h3 class="text-4xl font-bold text-center text-green-900 mb-10">Tinggalkan Pesan</h3>
       <form action="{{ route('kirim.pesan') }}" method="POST" class="bg-white shadow-lg rounded-xl p-8 space-y-6">
            @csrf
            <div div class="grid md:grid-cols-2 gap-6">
                <input type="text" name="nama" placeholder="Nama Lengkap" required class="p-3 border border-gray-300 rounded-lg w-full" >
                <input type="email" name="email" placeholder="Alamat Email" required class="p-3 border border-gray-300 rounded-lg w-full">
            </div>
            <textarea name="pesan" placeholder="Pesan Anda" rows="5" required class="p-3 border border-gray-300 rounded-lg w-full"></textarea>
            <button type="submit" class="bg-green-800 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition">Kirim Pesan</button>
        </form>

    </div>
</section>

<!-- Section: Google Maps -->
<section class="py-20 px-6 bg-white">
    <div class="max-w-5xl mx-auto">
        <h3 class="text-4xl font-bold text-center text-green-900 mb-10">Lokasi Desa Wisata</h3>
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
