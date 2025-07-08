<?php

namespace App\Http\Controllers;

use App\Models\Bengkel;
use Illuminate\Http\Request;

class BengkelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bengkels = Bengkel::all();
        return view('profil-bengkel', compact('bengkels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bengkel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'telepon' => 'nullable|string|max:20',
            'profil' => 'nullable|string',
            'ig' => 'nullable|string|max:100',
            'wa' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:100',
            'facebook' => 'nullable|string|max:100',
        ]);

        Bengkel::create($request->all());

        return redirect()->route('profil-bengkel.index')
                         ->with('success', 'Data bengkel berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bengkel $bengkel)
    {
        return view('bengkel.show', compact('bengkel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bengkel $bengkel)
    {
        return view('bengkel.edit', compact('bengkel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bengkel $bengkel)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'telepon' => 'nullable|string|max:20',
            'profil' => 'nullable|string',
            'ig' => 'nullable|string|max:100',
            'wa' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:100',
            'facebook' => 'nullable|string|max:100',
        ]);

        $bengkel->update($request->all());

        return redirect()->route('profil-bengkel.index')
                         ->with('success', 'Data bengkel berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bengkel $bengkel)
    {
        $bengkel->delete();

        return redirect()->route('profil-bengkel.index')
                         ->with('success', 'Data bengkel berhasil dihapus');
    }
}