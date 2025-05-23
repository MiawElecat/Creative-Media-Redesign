<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\Beranda;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tim = TeamMember::all();
        $testimonials = Testimonial::all();
        $home = Beranda::first();

        return view('public.beranda', [
            'tim' => $tim,
            'testimonials' => $testimonials,
            'home' => $home
        ]);

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
    public function show(Beranda $beranda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beranda $beranda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Beranda $beranda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beranda $beranda)
    {
        //
    }
}