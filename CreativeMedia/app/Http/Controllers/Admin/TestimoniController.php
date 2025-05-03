<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('admin.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'perusahaan' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:1024',
            'pesan' => 'required|string',
        ]);

        if ($request->hasFile('foto')) {
            $directory = 'testimoni_photos';
            $disk = 'public';
            $path = $request->file('foto')->store($directory, $disk);
            $validated['foto'] = $path;
        } else {
            $validated['foto'] = null;
        }

        Testimonial::create($validated);

        return redirect()->route('admin.testimonial.index')
            ->with('success', 'Testimoni berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'perusahaan' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:1024',
            'pesan' => 'required|string',
        ]);

        if ($request->hasFile('foto')) {
            if ($testimonial->foto) {
                Storage::disk('public')->delete($testimonial->foto);
            }
            $directory = 'testimoni_photos';
            $disk = 'public';
            $path = $request->file('foto')->store($directory, $disk);
            $validated['foto'] = $path;
        }

        $testimonial->update($validated);

        return redirect()->route('admin.testimonial.index')
            ->with('success', 'Testimoni berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        try {
            if ($testimonial->foto) {
                Storage::disk('public')->delete($testimonial->foto);
            }
            $testimonial->delete();

            return redirect()->route('admin.testimonial.index')
                ->with('success', 'Testimoni berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.testimonial.index')
                ->with('error', 'Gagal menghapus Testimoni: ' . $e->getMessage());
        }
    }
}
