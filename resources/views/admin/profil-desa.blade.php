@extends('layouts.app')

@section('content')
    <!-- Konten Utama Profil Desa -->
    <div class="col-md-10 py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <img src="/images/jatiluwih.jpg" class="card-img-top" alt="Desa">
                        <div class="card-body">
                            <h2 class="card-title">Profil Desa</h2>
                            <p class="card-text">Selamat datang di halaman Profil Desa kami. Di sini Anda bisa mengetahui lebih lanjut tentang desa, sejarah, budaya, dan potensi yang ada di desa ini.</p>
                            <a href="#" class="btn btn-primary">Lihat Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Informasi Desa</h3>
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>Nama Desa:</strong> Desa Jatiluiwih</li>
                        <li class="list-group-item"><strong>Lokasi:</strong> Kabupaten Tabanan, Provinsi Bali</li>
                        <!-- <li class="list-group-item"><strong>Jumlah Penduduk:</strong> 5.000</li> -->
                        <li class="list-group-item"><strong>Website:</strong> www.desacontoh.id</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
