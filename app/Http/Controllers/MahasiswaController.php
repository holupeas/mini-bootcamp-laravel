<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.index', [
            'data' => Mahasiswa::all(), // contoh Eloquent
        ]);
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', [
            'mahasiswa' => $mahasiswa,
        ]);
    }
}
