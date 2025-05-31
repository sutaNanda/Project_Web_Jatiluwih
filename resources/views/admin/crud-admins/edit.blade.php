@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Admin</h2>
    <form action="{{ route('kelola-admin.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama">Nama Admin</label>
            <input type="text" name="nama" value="{{ $admin->nama }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email">Email Admin</label>
            <input type="email" name="email" value="{{ $admin->email }}" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
