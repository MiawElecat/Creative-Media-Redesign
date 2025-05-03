<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TeamMember;
use Illuminate\Support\Facades\DB;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('team_members')->delete();

        $tim = [
            [
                'nama' => 'Ayu Sarwinasih',
                'posisi' => 'Customer Service Officer',
                'foto' => 'http://creativemedia.id/wp-content/uploads/2020/02/mbak-ayu-1.png',
                'deskripsi' => 'Menyelesaikan studi Diploma 3 Teknik Teknologi Pengolahan Kulit di Politeknik ATK Yogyakarta, mempunyai kemampuan komunikasi yang baik terutama dalam memberikan pelayanan kepada customer serta berpengalaman. Beliau menguasai software Ms. Word, Ms. Excel & Ms. Power Point.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dhea Choirunissa S. A.',
                'posisi' => 'Customer Service Officer',
                'foto' => 'http://creativemedia.id/wp-content/uploads/2020/02/mbak-dea-1.png',
                'deskripsi' => 'Mempunyai berbagai pengalaman di front desk terutama dalam memberikan pelayanan kepada calon customer dengan prima dan profesional, menempuh kuliah Fakultas Hukum di salah satu Universitas Ternama di Surabaya, menguasai software Ms. Word, Ms. Excel & Ms. Power Point.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Tsatyana Ulfah',
                'posisi' => 'Manager HR & GA',
                'foto' => 'http://creativemedia.id/wp-content/uploads/2021/10/mba_ulfa2.png',
                'deskripsi' => 'Menyelesaikan Studi di Perguruan Tinggi Negeri ternama di kota Surabaya. Memiliki background dan pengalaman di bidang Pendidikan, serta berpengalaman sebagai Manager salah satu Perusahaan di kota Surabaya sejak tahun 2018. Menguasai software perkantoran Microsoft Office (Ms. Word, Ms. Excel & Ms. PowerPoint), aktif Internet & Social Media.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'nama' => 'Rida Annisa Ramadhani',
                'posisi' => 'Admin & Finance',
                'foto' => 'http://creativemedia.id/wp-content/uploads/2021/10/mba_rida2.png',
                'deskripsi' => 'Menyelesaikan Studi S1 Pendidikan Akuntansi di Perguruan Tinggi Negeri ternama di Surabaya, berpengalaman di bidang finance dan perpajakan. Menguasai software perkantoran Microsoft Office (Ms. Word, Ms. Excel & Ms. PowerPoint), sangat familiar dengan Social Media.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('team_members')->insert($tim);

    }
}
