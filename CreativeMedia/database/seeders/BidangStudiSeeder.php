<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BidangStudi;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Str;

class BidangStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('bidang_studis')->delete();

        $daftarNamaStudi = [
            'Komputer Umum & Internet',
            'Administrasi Perkantoran',
            'Komputer Akuntansi',
            'Digital Marketing',
            'Animasi 2D & 3D',
            'Website Desain CMS',
            'Desain Grafis',
            'Desain Interior',
            'Desain Arsitektur',
            'Pemrograman Dasar',
            'Pemrograman Web Designer',
            'Pemrograman Web',
            'Pemrograman Android',
            'Videography',
            'Photography',
        ];

        $bidangStudiData = [];

        foreach ($daftarNamaStudi as $nama) {
            $bidangStudiData[] = [
                'nama' => $nama,
                'slug' => Str::slug($nama),
                'nama_ikon' => null,
                'deskripsi_singkat' => 'Deskripsi singkat untuk ' . $nama . '.',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('bidang_studis')->insert($bidangStudiData);
    }
}
