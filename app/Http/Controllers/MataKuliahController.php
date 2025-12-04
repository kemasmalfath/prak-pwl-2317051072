<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mks = MataKuliah::all();
        
        $data = [
            'title' => 'Daftar Mata Kuliah',
            'mks' => $mks,
        ];
        
        return view('list_mk', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Mata Kuliah Baru',
        ];
        
        return view('create_mk', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required|string|max:100',
            'sks' => 'required|integer|min:1|max:10',
        ]);

        MataKuliah::create([
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
        ]);

        return redirect()->route('matakuliah.index')
                         ->with('success', 'Mata kuliah berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mk = MataKuliah::findOrFail($id);
        $data = [
            'title' => 'Edit Mata Kuliah',
            'mk' => $mk,
        ];
        return view('edit_mk', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mk' => 'required|string|max:100',
            'sks' => 'required|integer|min:1|max:10',
        ]);

        $mk = MataKuliah::findOrFail($id);
        $mk->update([
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
        ]);

        return redirect()->route('matakuliah.index')
                         ->with('success', 'Data mata kuliah berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mk = MataKuliah::findOrFail($id);
        $mk->delete();

        return redirect()->route('matakuliah.index')
                         ->with('success', 'Data mata kuliah berhasil dihapus!');
    }
}