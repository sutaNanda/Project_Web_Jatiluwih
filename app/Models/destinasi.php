<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;

    protected $table = 'destinasi'; // Explicitly set the table name to destinasi

    protected $fillable = ['nama_destinasi'];

    public function pakets()
    {
        return $this->hasMany(Paket::class);
    }
}