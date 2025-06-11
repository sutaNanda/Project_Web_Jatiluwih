<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    protected $table = 'admins'; // tabel yang digunakan
    protected $guard = 'admin';  // guard untuk auth

    protected $fillable = ['nama', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];
}
