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
        // Ambil semua data mata kuliah
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

        // Redirect ke halaman list dengan pesan sukses
        return redirect()->route('matakuliah.index')
                         ->with('success', 'Mata kuliah berhasil ditambahkan!');
    }
}