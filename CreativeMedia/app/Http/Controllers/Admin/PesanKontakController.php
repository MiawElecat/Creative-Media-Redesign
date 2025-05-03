<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PesanKontak;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PesanKontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanKontaks = PesanKontak::latest()->paginate(15);
        return view('admin.pesan-kontak.index', compact('pesanKontaks'));
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
    public function show(PesanKontak $pesanKontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PesanKontak $pesanKontak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PesanKontak $pesanKontak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PesanKontak $pesanKontak)
    {
        try {
            $pesanKontak->delete();

            return redirect()->route('admin.pesan-kontak.index')
                ->with('success', 'Pesan kontak berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.pesan-kontak.index')
                ->with('error', 'Gagal menghapus pesan kontak: ' . $e->getMessage());
        }
    }
}
