<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Testimonial;
use App\Models\PesanKontak;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $totalArtikel = Artikel::count();
        $totalTestimoni = Testimonial::count();
        $totalPesanKontak = PesanKontak::count();

        return view('admin.dashboard', compact(
            'totalArtikel',
            'totalTestimoni',
            'totalPesanKontak'
        ));
    }
}
