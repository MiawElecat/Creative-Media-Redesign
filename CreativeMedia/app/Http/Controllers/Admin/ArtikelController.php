<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikels = Artikel::latest()->paginate(10);
        return view('admin.artikel.index', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255|unique:artikels,judul',
            'excerpt' => 'nullable|string|max:500',
            'konten_lengkap' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'is_published' => 'sometimes|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['judul']);
        $count = 1;
        $originalSlug = $validated['slug'];
        while (Artikel::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = $originalSlug . '-' . $count++;
        }

        if ($request->hasFile('thumbnail')) {
            $directory = 'artikel_thumbnails';
            $disk = 'public';
            $path = $request->file('thumbnail')->store($directory, $disk);
            $validated['thumbnail'] = $path;
        } else {
            $validated['thumbnail'] = null;
        }

        $validated['is_published'] = $request->has('is_published');
        Artikel::create($validated);

        return redirect()->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        return view('admin.artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255|unique:artikels,judul,' . $artikel->id,
            'excerpt' => 'nullable|string|max:500',
            'konten_lengkap' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'is_published' => 'sometimes|boolean',
        ]);

        if ($artikel->judul !== $validated['judul']) {
            $validated['slug'] = Str::slug($validated['judul']);
            $count = 1;
            $originalSlug = $validated['slug'];
            while (Artikel::where('slug', $validated['slug'])->where('id', '!=', $artikel->id)->exists()) {
                $validated['slug'] = $originalSlug . '-' . $count++;
            }
        } else {
            unset($validated['slug']);
        }

        if ($request->hasFile('thumbnail')) {
            if ($artikel->thumbnail) {
                Storage::disk('public')->delete($artikel->thumbnail);
            }
            $directory = 'artikel_thumbnails';
            $disk = 'public';
            $path = $request->file('thumbnail')->store($directory, $disk);
            $validated['thumbnail'] = $path;
        }

        $validated['is_published'] = $request->has('is_published');
        $artikel->update($validated);

        return redirect()->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        try {
            if ($artikel->thumbnail) {
                Storage::disk('public')->delete($artikel->thumbnail);
            }
            $artikel->delete();

            return redirect()->route('admin.artikel.index')
                ->with('success', 'Artikel berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.artikel.index')
                ->with('error', 'Gagal menghapus Artikel: ' . $e->getMessage());
        }
    }
}
