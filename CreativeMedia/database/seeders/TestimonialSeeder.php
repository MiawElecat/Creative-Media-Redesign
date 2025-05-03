<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('testimonials')->delete();

        $testimonials = [
            [
                'nama' => 'Elvis Guterres & Domingos Guterres',
                'perusahaan' => 'Australia Awards – The Palladium Group',
                'foto' => 'http://creativemedia.id/wp-content/uploads/2016/03/Elvis-Guterres-circle.png',
                'pesan' => 'One of the best web training providers. Thx buat Pak Hadi. Would definitely recommend it to other Timorese Comms Practitioners. Thank u and keep up the excellent work',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rinta Ariestia Hardianti',
                'perusahaan' => 'Humas & Protokol Kota Kediri',
                'foto' => 'http://creativemedia.id/wp-content/uploads/2020/01/Humas-Protokol-Kota-Kediri.jpeg',
                'pesan' => 'Banyak ilmu yang didapat terkait desain grafis baik teknik dan teorinya, yang dulunya saya tidak begitu bisa tentang photoshop sekarang jadi suka. Terima kasih banyak Creative media telah membantu.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Danny Azar Daskoro',
                'perusahaan' => 'Universitas Negeri Malang',
                'foto' => 'http://creativemedia.id/wp-content/uploads/2020/01/UNIV.-Negeri-Malang.jpeg',
                'pesan' => 'Terima kasih Creative Media, trainernya menguasai materi, kominukatif dan banyak tambahan ilmu dari Creative Media.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('testimonials')->insert($testimonials);

    }
}
