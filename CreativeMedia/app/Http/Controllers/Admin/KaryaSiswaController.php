<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KaryaSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class KaryaSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyaSiswas = KaryaSiswa::latest()
            ->paginate(12);
        return view('admin.karya-siswa.index', compact('karyaSiswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.karya-siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'nama_siswa' => 'nullable|string|max:255',
    //         'kursus' => 'nullable|string|max:255',
    //         'deskripsi' => 'nullable|string',
    //         'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    //         'is_published' => 'sometimes|boolean',
    //     ]);

    //     $path = $request->file('gambar')->store('public/karya_siswa');
    //     $validated['gambar'] = str_replace('public/', '', $path);
    //     $validated['is_published'] = $request->has('is_published');

    //     KaryaSiswa::create($validated);

    //     return redirect()->route('admin.karya-siswa.index')
    //         ->with('success', 'Karya Siswa berhasil ditambahkan.');
    // }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_siswa' => 'nullable|string|max:255',
            'kursus' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'is_published' => 'sometimes|boolean',
        ]);

        $file = $request->file('gambar');
        $directory = 'karya_siswa';
        $disk = 'public';

        $path = $file->store($directory, $disk);

        $validated['gambar'] = $path;
        $validated['is_published'] = $request->has('is_published');

        KaryaSiswa::create($validated);

        return redirect()->route('admin.karya-siswa.index')
            ->with('success', 'Karya Siswa berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(KaryaSiswa $karyasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KaryaSiswa $karyaSiswa)
    {
        return view('admin.karya-siswa.edit', compact('karyaSiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KaryaSiswa $karyaSiswa)
    {
        $validated = $request->validate([
            'nama_siswa' => 'nullable|string|max:255',
            'kursus' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'is_published' => 'sometimes|boolean',
        ]);

        // Upload Gambar
        if ($request->hasFile('gambar')) {
            if ($karyaSiswa->gambar) {
                Storage::disk('public')->delete($karyaSiswa->gambar);
            }
            $directory = 'karya_siswa';
            $disk = 'public';
            $path = $request->file('gambar')->store($directory, $disk);
            $validated['gambar'] = $path;
        }

        $validated['is_published'] = $request->has('is_published');
        $karyaSiswa->update($validated);

        return redirect()->route('admin.karya-siswa.index')
            ->with('success', 'Karya Siswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KaryaSiswa $karyaSiswa)
    {
        try {
            if ($karyaSiswa->gambar) {
                Storage::disk('public')->delete($karyaSiswa->gambar);
            }
            $karyaSiswa->delete();

            return redirect()->route('admin.karya-siswa.index')
                ->with('success', 'Karya Siswa berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.karya-siswa.index')
                ->with('error', 'Gagal menghapus Karya Siswa: ' . $e->getMessage());
        }
    }
}
