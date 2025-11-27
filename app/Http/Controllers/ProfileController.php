<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "Kemas M Alfath ", $npm = "2317051072", $kelas = "B") {
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas
        ];

        return view('profile', $data);
    }
}
