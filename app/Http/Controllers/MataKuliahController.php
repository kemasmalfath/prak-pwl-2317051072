<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Menampilkan daftar mata kuliah
     */
    public function index()
    {
        // Ambil semua data mata kuliah
        $mks = MataKuliah::all();
        
        $data = [
            'title' => 'Daftar Mata Kuliah',
            'mks' => $mks,
        ];
        
        return view('list_mk', $data);
    }

    /**
     * Menampilkan form create
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Mata Kuliah Baru',
        ];
        
        return view('create_mk', $data);
    }

    /**
     * Menyimpan data baru
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_mk' => 'required|string|max:100',
            'sks' => 'required|integer|min:1|max:10',
        ]);

        // Simpan ke database
        MataKuliah::create([
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
        ]);

        // Redirect ke halaman list
        return redirect()->route('matakuliah.index')
                         ->with('success', 'Mata kuliah berhasil ditambahkan!');
    }
}