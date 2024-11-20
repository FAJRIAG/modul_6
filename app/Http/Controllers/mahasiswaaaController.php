<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaaaController extends Controller
{
    public function index()
    {
        $mhs = "Nadia";
        $title = "Data Mahasiswa";
        $dataMhs = $this->dataMahasiswa();
        return view('konten.mahasiswaaaa', compact('mhs', 'title', 'dataMhs'));
    }

    public function dataMahasiswa()
    {
        return [
            [
                'nim' => '202203001',
                'nama' => 'Adeeva',
                'prodi' => 'TI',
            ],
            [
                'nim' => '202203002',
                'nama' => 'Nadia',
                'prodi' => 'TI',
            ],
            [
                'nim' => '202203003',
                'nama' => 'Zahra',
                'prodi' => 'TI',
            ],
        ];
    }
}
