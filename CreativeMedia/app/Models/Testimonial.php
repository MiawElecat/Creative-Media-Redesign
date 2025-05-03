<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'nama',
        'perusahaan',
        'foto', 
        'pesan',
    ];
}
