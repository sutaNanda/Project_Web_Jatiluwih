@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <div class="col-md-10 p-4">
        <h1 class="mb-4">Kelola Admin</h1>

        <div class="mb-3">
            <a href="{{ route('kelola-admin.create') }}" class="btn btn-success">Tambah Admin Baru</a>
        </div>

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
                @foreach ($admins as $index => $admin)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->role }}</td>
                    <td>
                        <a href="{{ route('kelola-admin.edit', $admin->id) }}" class="btn btn-info btn-sm">Edit</a>
                        <form action="{{ route('kelola-admin.destroy', $admin->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus admin ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
