<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $table = 'paket'; // Explicitly set the table name to paket

    protected $fillable = [
        'nama_paket',
        'destinasi_id',
        'gambar',
        'harga',
        'fasilitas',
        'durasi',
        'populer',
    ];

    public function destinasi()
    {
        return $this->belongsTo(Destinasi::class);
    }
}