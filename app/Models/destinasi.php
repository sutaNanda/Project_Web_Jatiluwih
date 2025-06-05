<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;

    protected $table = 'destinasi';

    protected $fillable = [
        'nama_destinasi',
        'deskripsi',
        'gambar',
        'status',
    ];

    public function pakets()
    {
        return $this->hasMany(Paket::class);
    }
}
