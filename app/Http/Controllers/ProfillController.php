<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfillController extends Controller
{
    public function index()
    {
        $profilMahasiswa = [
            'nama' => 'TIARA SEPTIANA',
            'nim' => '2307053',
            'jurusan' => 'Teknik Informatika',
            'Prodi' => 'Sistem Informasi Kota Cerdas',
            'angkatan' => '2023'
        ];

        return view('profill.index', compact('profilMahasiswa'));
    }
}