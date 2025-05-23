@extends('layouts.app')

@section('content')
    <!-- Konten Utama -->
    <div class="col-md-10 p-4">
        <h1 class="mb-4">Galeri Wisata</h1>
        <p>Berikut adalah galeri tempat wisata yang tersedia:</p>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="https://cdn.idntimes.com/content-images/post/20211028/1-5ed814e627c75e8f7dce7c3f9eda6c4f.jpeg" class="card-img-top" alt="Wisata 1">
                    <div class="card-body">
                        <h5 class="card-title">Jatiluwih Rice Terrace</h5>
                        <p class="card-text">Daya tarik utama dari Desa Jatiluwih adalah pemandangan area persawahan yang rapi dengan terasering berundak. Hamparan lahan hijaunya menjadi spot foto menarik. perairan subak inilah yang dinobatkan sebagai Situs Warisan Dunia oleh UNESCO.</p>
                        <a href="#" class="btn btn-primary btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="https://cdn.idntimes.com/content-images/post/20211028/3-3eb6d2a0923f77ab56034e4c83b3e203.jpeg" class="card-img-top" alt="Wisata 2">
                    <div class="card-body">
                        <h5 class="card-title">Air Terjun Yeh Hoo</h5>
                        <p class="card-text">Selain kawasan persawahan yang cantik, di dekat Jatiluwih, kamu juga bisa menemukan air terjun yang memesona. Salah satunya Air Terjun Yeh Hoo. Lokasi air terjun ini tepat berada di sebelah timur Desa Jatiluwih.</p>
                        <a href="#" class="btn btn-primary btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="https://cdn.idntimes.com/content-images/post/20211028/4-264c56bbcae43e011e2cf247c5791d2a.jpeg" class="card-img-top" alt="Wisata 3">
                    <div class="card-body">
                        <h5 class="card-title">Pura Luhur Besikalung</h5>
                        <p class="card-text">Bali memang dikenal dengan Pulau Seribu Pura. Banyak pura di Bali yang pemandangannya sangat cantik. Salah satunya Pura Luhur Besikalung. Lokasinya berada di lereng gunung bagian selatan Gunung Batukaru.</p>
                        <a href="#" class="btn btn-primary btn-sm">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
