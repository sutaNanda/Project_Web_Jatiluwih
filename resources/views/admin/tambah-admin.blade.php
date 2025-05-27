@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Admin Baru</h1>

    <form action="{{ route('kelola-admin.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Admin</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Admin</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password (sementara)</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Peran</label>
            <select name="role" id="role" class="form-select" required>
                <option value="Admin">Admin</option>
                <option value="Super Admin">Super Admin</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('kelola-admin.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
