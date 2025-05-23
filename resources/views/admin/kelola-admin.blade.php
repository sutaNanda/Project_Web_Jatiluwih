@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
        <!-- Konten Utama Kelola Admin -->
        <div class="col-md-10 p-4">
            <h1 class="mb-4">Kelola Admin</h1>

            <!-- Tombol Tambah Admin -->
            <div class="mb-3">
                <a href="#" class="btn btn-success">Tambah Admin Baru</a>
            </div>

            <!-- Tabel Admin -->
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Admin</th>
                        <th>Email</th>
                        <th>Peran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>johndoe@example.com</td>
                        <td>Super Admin</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>janesmith@example.com</td>
                        <td>Admin</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
