<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LayananJasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanans = Layanan::latest()->paginate(10);
        return view('admin.layanan-jasa.index', compact('layanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layanan-jasa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255|unique:layanans,nama',
            'deskripsi_singkat' => 'nullable|string|max:500',
            'konten_lengkap' => 'required|string',
            'ikon' => 'nullable|string|max:100',
            'gambar_header' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $validated['slug'] = Str::slug($validated['nama']);
        $count = 1;
        $originalSlug = $validated['slug'];
        while (Layanan::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = $originalSlug . '-' . $count++;
        }

        if ($request->hasFile('gambar_header')) {
            $path = $request->file('gambar_header')->store('public/layanan_headers');
            $validated['gambar_header'] = str_replace('public/', '', $path);
        }

        Layanan::create($validated);

        return redirect()->route('admin.layanan-jasa.index')
            ->with('success', 'Layanan Jasa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Layanan $layananJasa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Layanan $layananJasa)
    {
        return view('admin.layanan-jasa.edit', compact('layananJasa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Layanan $layananJasa)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255|unique:layanans,nama,' . $layananJasa->id,
            'deskripsi_singkat' => 'nullable|string|max:500',
            'konten_lengkap' => 'required|string',
            'ikon' => 'nullable|string|max:100',
            'gambar_header' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($layananJasa->nama !== $validated['nama']) {
            $validated['slug'] = Str::slug($validated['nama']);
            $count = 1;
            $originalSlug = $validated['slug'];
            while (Layanan::where('slug', $validated['slug'])->where('id', '!=', $layananJasa->id)->exists()) {
                $validated['slug'] = $originalSlug . '-' . $count++;
            }
        } else {
            unset($validated['slug']);
        }

        if ($request->hasFile('gambar_header')) {
            // Hapus gambar lama jika ada
            if ($layananJasa->gambar_header) {
                Storage::delete('public/' . $layananJasa->gambar_header);
            }
            $path = $request->file('gambar_header')->store('public/layanan_headers');
            $validated['gambar_header'] = str_replace('public/', '', $path);
        }

        $layananJasa->update($validated);

        return redirect()->route('admin.layanan-jasa.index')
            ->with('success', 'Layanan Jasa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Layanan $layananJasa)
    {
        try {
            if ($layananJasa->gambar_header) {
                Storage::delete('public/' . $layananJasa->gambar_header);
            }

            $layananJasa->delete();

            return redirect()->route('admin.layanan-jasa.index')
                ->with('success', 'Layanan Jasa berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.layanan-jasa.index')
                ->with('error', 'Gagal menghapus Layanan Jasa: ' . $e->getMessage());
        }
    }
}
