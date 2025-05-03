<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teamMembers = TeamMember::latest()->paginate(10);
        return view('admin.team-member.index', compact('teamMembers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team-member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:1024',
        ]);

        if ($request->hasFile('foto')) {
            $directory = 'team_photos';
            $disk = 'public';
            $path = $request->file('foto')->store($directory, $disk);
            $validated['foto'] = $path;
        } else {
            $validated['foto'] = null;
        }

        TeamMember::create($validated);

        return redirect()->route('admin.team-member.index')
            ->with('success', 'Anggota Tim berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TeamMember $teamMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeamMember $teamMember)
    {
        return view('admin.team-member.edit', compact('teamMember'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeamMember $teamMember)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:1024',
        ]);

        if ($request->hasFile('foto')) {
            if ($teamMember->foto) {
                Storage::disk('public')->delete($teamMember->foto);
            }
            $directory = 'team_photos';
            $disk = 'public';
            $path = $request->file('foto')->store($directory, $disk);
            $validated['foto'] = $path;
        }

        $teamMember->update($validated);

        return redirect()->route('admin.team-member.index')
            ->with('success', 'Anggota Tim berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeamMember $teamMember)
    {
        try {
            if ($teamMember->foto) {
                Storage::disk('public')->delete($teamMember->foto);
            }
            $teamMember->delete();

            return redirect()->route('admin.team-member.index')
                ->with('success', 'Anggota Tim berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.team-member.index')
                ->with('error', 'Gagal menghapus Anggota Tim: ' . $e->getMessage());
        }
    }
}
