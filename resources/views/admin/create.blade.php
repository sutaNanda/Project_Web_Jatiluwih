<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('destinasi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nama_destinasi" required>
    <textarea name="deskripsi" required></textarea>
    
    <input type="file" name="gambar"> <!-- input gambar -->

    <select name="status">
        <option value="aktif">Aktif</option>
        <option value="tidak_aktif">Tidak Aktif</option>
    </select>

    <button type="submit">Simpan</button>
</form>

    
</body>
</html>