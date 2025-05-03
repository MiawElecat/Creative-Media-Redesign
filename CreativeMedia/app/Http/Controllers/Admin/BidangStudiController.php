<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BidangStudi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BidangStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bidangStudi = BidangStudi::latest()->paginate(10);
        return view('admin.bidang-studi.index', compact('bidangStudi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bidang-studi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255|unique:bidang_studis,nama',
            'nama_ikon' => 'nullable|string|max:100', // Opsional
            'deskripsi_singkat' => 'nullable|string|max:500',
        ]);

        $validated['slug'] = Str::slug($validated['nama']);
        $count = 1;
        $originalSlug = $validated['slug'];
        while (BidangStudi::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = $originalSlug . '-' . $count++;
        }

        BidangStudi::create($validated);
        return redirect()->route('admin.bidang-studi.index')
            ->with('success', 'Bidang Studi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BidangStudi $bidangStudi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BidangStudi $bidangStudi)
    {
        return view('admin.bidang-studi.edit', compact('bidangStudi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BidangStudi $bidangStudi)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255|unique:bidang_studis,nama,' . $bidangStudi->id,
            'nama_ikon' => 'nullable|string|max:100',
            'deskripsi_singkat' => 'nullable|string|max:500',
        ]);

        if ($bidangStudi->nama !== $validated['nama']) {
            $validated['slug'] = Str::slug($validated['nama']);
            $count = 1;
            $originalSlug = $validated['slug'];
            while (BidangStudi::where('slug', $validated['slug'])->where('id', '!=', $bidangStudi->id)->exists()) {
                $validated['slug'] = $originalSlug . '-' . $count++;
            }
        } else {
            unset($validated['slug']);
        }

        $bidangStudi->update($validated);

        return redirect()->route('admin.bidang-studi.index')
            ->with('success', 'Bidang Studi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BidangStudi $bidangStudi)
    {
        try {
            $bidangStudi->delete();

            return redirect()->route('admin.bidang-studi.index')
                ->with('success', 'Bidang Studi berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.bidang-studi.index')
                ->with('error', 'Gagal menghapus Bidang Studi: ' . $e->getMessage());
        }
    }
}
