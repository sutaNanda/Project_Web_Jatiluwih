<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasi';

    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'paket_id',
        'jumlah_orang',
        'tanggal_kunjungan',
        'catatan',
        'status', // Wajib agar status bisa diubah oleh Laravel
    ];

    protected $dates = [
        'tanggal_kunjungan',
        'created_at',
        'updated_at',
    ];

    // Relasi ke model Paket
    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }

    // Relasi ke Pembayaran (one to one)
    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'reservasi_id');
    }
}
