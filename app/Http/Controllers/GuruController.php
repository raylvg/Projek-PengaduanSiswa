<?php

namespace App\Http\Controllers;
use App\Models\siswa;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        // Ambil semua data siswa dari database
    $siswas = siswa::all();


    // Kirim data siswa ke view index.blade.php
    return view('guru.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gurjut = siswa::findOrFail($id);

        return view('guru.edit', compact('gurjut'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status' =>'required',
        ]);

        $gurjut = siswa::findOrFail($id);

        $gurjut->update([
            'status' => $request->status,
        ]);

        return redirect()->route('guru.index')->with(['success' => 'AJIGG BERHASIL']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
