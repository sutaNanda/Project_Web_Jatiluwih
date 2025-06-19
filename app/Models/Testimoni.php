<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = 'testimoni';

    protected $fillable = [
        'email',
        'pesan',
        'paket_id',
        'tanggal',
        'gambar',
        'rating',
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}