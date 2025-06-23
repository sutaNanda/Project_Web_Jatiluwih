<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';

    protected $fillable = [
        'reservasi_id',
        'metode_pembayaran',
        'status',
        'midtrans_order_id',
        'midtrans_transaction_id',
        'jumlah',
    ];

    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class);
    }
}
    