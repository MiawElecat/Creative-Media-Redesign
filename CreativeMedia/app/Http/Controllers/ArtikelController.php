<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = collect([
            (object)[
                'judul' => 'Bangun Karier Digital Lebih Cepat, Tanpa Harus Tunggu Gelar Sarjana',
                'slug' => 'bangun-karier-digital-lebih-cepat-tanpa-harus-tunggu-gelar-sarjana',
                'link' => 'https://creativemedia.id/bangun-karier-digital-lebih-cepat-tanpa-harus-tunggu-gelar-sarjana/',
                'thumbnail' => 'https://creativemedia.id/wp-content/uploads/2025/04/Bangun-Karier-Digital-Lebih-Cepat-Tanpa-Harus-Tunggu-Gelar-Sarjana-cover-250x250.jpg',
                'excerpt' => 'Dulu, gelar sarjana dianggap satu-satunya jalan menuju kesuksesan. Namun kini, dunia telah berubah. Di era digital, skill dan portofolio justru lebih cepat membuka peluang...',
                'created_at' => now()->subDays(1) // Contoh tanggal
            ],
            (object)[
                'judul' => 'Bangun Karier Tanpa Gelar? Skill Digital Adalah Kuncinya',
                'slug' => 'bangun-karier-tanpa-gelar-skill-digital-adalah-kuncinya',
                'link' => 'https://creativemedia.id/bangun-karier-tanpa-gelar-skill-digital-adalah-kuncinya/',
                'thumbnail' => 'https://creativemedia.id/wp-content/uploads/2025/04/Bangun-Karier-Tanpa-Gelar-Skill-Digital-Adalah-Kuncinya-cover-250x250.jpg',
                'excerpt' => 'Di era digital saat ini, memiliki ijazah saja tidak lagi menjadi satu-satunya syarat. Perusahaan kini lebih peduli pada apa yang bisa kamu lakukan dibanding dari mana kamu lulus...',
                'created_at' => now()->subDays(2)
            ],
            (object)[
                'judul' => 'Desain Bukan Cuma Estetik, Tapi Cara Berpikir',
                'slug' => 'desain-bukan-cuma-estetik-tapi-cara-berpikir',
                'link' => 'https://creativemedia.id/desain-bukan-cuma-estetik-tapi-cara-berpikir/',
                'thumbnail' => 'https://creativemedia.id/wp-content/uploads/2025/04/Desain-Bukan-Cuma-Estetik-Tapi-Cara-Berpikir-cover-250x250.jpg',
                'excerpt' => 'Ketika mendengar kata desain, kebanyakan orang langsung membayangkan bentuk atau tampilan visual. Padahal, desain bukan hanya soal estetika. Desain adalah cara berpikir...',
                'created_at' => now()->subDays(3)
            ],
             (object)[
                'judul' => 'Bukan Sekadar Main Game tapi Jadi Pintar Coding Sejak Dini',
                'slug' => 'bukan-sekadar-main-game-tapi-jadi-pintar-coding-sejak-dini',
                'link' => 'https://creativemedia.id/bukan-sekadar-main-game-tapi-jadi-pintar-coding-sejak-dini/',
                'thumbnail' => 'https://creativemedia.id/wp-content/uploads/2025/04/Bukan-Sekadar-Main-Game-tapi-Jadi-Pencipta-Teknologi-Sejak-Dini-cover-250x250.jpg',
                'excerpt' => 'Di era digital seperti sekarang, anak-anak tak cukup hanya menjadi pengguna gadget. Mereka perlu dilatih untuk menciptakan, membangun, dan memahami bagaimana teknologi bekerja...',
                'created_at' => now()->subDays(4)
            ],
             (object)[
                'judul' => 'PT. Chemico Surabaya Kuasai Digital Marketing',
                'slug' => 'pt-chemico-surabaya-kuasai-digital-marketing',
                'link' => 'https://creativemedia.id/pt-chemico-surabaya-kuasai-digital-marketing-dari-basic-hingga-advanced-bersama-creative-media/',
                'thumbnail' => 'https://creativemedia.id/wp-content/uploads/2025/04/PT.-Chemico-Surabaya-Kuasai-Digital-Marketing-dari-Basic-hingga-Advanced-Bersama-Creative-Media-Cover-250x250.jpg',
                'excerpt' => 'Di era Society 5.0, transformasi digital menjadi kebutuhan utama bagi perusahaan untuk tetap bersaing. PT. Chemico Surabaya mengambil langkah strategis...',
                'created_at' => now()->subDays(5)
            ],
             (object)[
                'judul' => 'PT. Istana Surya Perkasa Mengikuti Kursus Digital Marketing',
                'slug' => 'pt-istana-surya-perkasa-mengikuti-kursus-digital-marketing',
                'link' => 'https://creativemedia.id/pt-istana-surya-perkasa-mengikuti-kursus-digital-marketing-di-creative-media/',
                'thumbnail' => 'https://creativemedia.id/wp-content/uploads/2025/04/PT.-Istana-Surya-Perkasa-Mengikuti-Kursus-Digital-Marketing-di-Creative-Media-cover-250x250.jpg',
                'excerpt' => 'Di era digital yang terus berkembang pesat, kemampuan dalam pemasaran digital menjadi kebutuhan utama bagi perusahaan. PT. Istana Surya Perkasa mengambil langkah strategis...',
                'created_at' => now()->subDays(6)
            ],
        ]);

        $artikel = Artikel::orderBy('created_at', 'desc')->paginate(6);
        return view('public.artikel', [
            'artikel' => $artikel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        return "Halaman Detail Artikel untuk slug: " . e($slug);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        //
    }
}
