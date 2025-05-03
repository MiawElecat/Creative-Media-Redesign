<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PesanKontak;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('public.kontak');
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
        $validatedData = $request->validate([
            'myname'    => 'required|string|max:255', 
            'myemail'   => 'required|email|max:255', 
            'mysubject' => 'required|string|max:255',
            'mymessage' => 'required|string',
        ]);

        $dataToStore = [
            'nama'    => $validatedData['myname'],
            'email'   => $validatedData['myemail'],
            'subjek'  => $validatedData['mysubject'],
            'pesan'   => $validatedData['mymessage'],
        ];

        PesanKontak::create($dataToStore);

        return redirect()->route('kontak')
                         ->with('success', 'Pesan Anda telah berhasil terkirim! Terima kasih.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PesanKontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PesanKontak $kontak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PesanKontak $kontak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PesanKontak $kontak)
    {
        //
    }
}
