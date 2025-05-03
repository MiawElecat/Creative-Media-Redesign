<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi_singkat',
        'slug',
        'konten_lengkap',
        'gambar_header',
        'ikon',
    ];
}
