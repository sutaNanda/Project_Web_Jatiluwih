<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';
    protected $fillable = ['destinasi_id', 'nama_paket', 'gambar', 'harga', 'fasilitas', 'durasi', 'populer'];
}
