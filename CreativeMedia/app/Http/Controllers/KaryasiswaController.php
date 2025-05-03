<?php

namespace App\Http\Controllers;

use App\Models\KaryaSiswa;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KaryasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyaSiswas = KaryaSiswa::where('is_published', true)
            ->latest()
            ->paginate(12);

        return view('public.karyasiswa', compact('karyaSiswas'));
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
    public function show(karyasiswa $karyasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(karyasiswa $karyasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, karyasiswa $karyasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(karyasiswa $karyasiswa)
    {
        //
    }
}
