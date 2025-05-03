<?php

namespace App\Http\Controllers;

use App\Models\BidangStudi;
use Illuminate\Http\Request;

class BidangstudiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bidangStudi = BidangStudi::all();

        return view('public.bidangstudi', [
            'bidangStudi' => $bidangStudi
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
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function show(string $slug)
    {
  
        $studi = BidangStudi::where('slug', $slug)->firstOrFail();
        return view('public.bidangstudi-detail', [
            'studi' => $studi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bidangstudi $bidangstudi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bidangstudi $bidangstudi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bidangstudi $bidangstudi)
    {
        //
    }
}
