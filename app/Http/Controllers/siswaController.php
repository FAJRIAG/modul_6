<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function index(){
        $mhs = "Nadia";
        $title = "Mahasiswa Websaya.com";
        $slug = "mahasiswaa";
        return view('siswa', compact('mhs','title','slug'));

    }
}