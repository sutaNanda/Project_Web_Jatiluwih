@extends('layouts.main')

@section('content2')
<div class="flex justify-center mt-16">
    <div class="w-full max-w-2xl p-6 bg-white shadow-md rounded-lg border-2 border-green-800">
        <h2 class="text-2xl font-semibold mb-6 text-gray-800">Formulir Pemesanan Wisata</h2>

        <form action="#" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
            </div>

            <div>
                <label for="telepon" class="block text-sm font-medium text-gray-700">No. Telepon</label>
                <input type="text" id="telepon" name="telepon" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
            </div>

            <div>
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal Kunjungan</label>
                <input type="date" id="tanggal" name="tanggal" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
            </div>

            <div>
                <label for="paket" class="block text-sm font-medium text-gray-700">Paket Wisata</label>
                <select id="paket" name="paket" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
                    <option value="">-- Pilih Paket --</option>
                    <option value="pantai">Pura Kedatuan Raksa Sidhi</option>
                    <option value="budaya">Terasering Jatiluwih</option>
                    <option value="petualangan">Air Terjun Yeh Hoo</option>
                </select>
            </div>

            <div>
                <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah Orang</label>
                <input type="number" id="jumlah" name="jumlah" min="1" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
            </div>

            <div>
                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-md shadow-sm transition duration-200">
                    Kirim Pemesanan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
