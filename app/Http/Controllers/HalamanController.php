<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function profil() {
        $slug = 'profil';
        return view('profil', compact('slug'));
    }

    public function mahasiswa() {
        $title = "Ini adalah data mahasiswa TIARA SEPTIANA Dari Controller";

        return view('mahasiswa', compact('title'));
    }

    public function mahasiswaaa() {
        $titlee = "Mahasiswa websaya.com";
        $slug = "mahasiswaaa";
        $mhs = "Nadia";
        $dataMhs = $this -> dataMahasiswa ();
        return view('mahasiswaaa', compact('mhs','titlee','slug','dataMhs'));
    }

    public function prodi() {
        $slug = 'prodi';
        $prodi = ['Teknik Informatika', 'Teknik Elektro', 'Teknik Mesin'];
        return view('prodi', compact('prodi', 'slug'));
    }
}



