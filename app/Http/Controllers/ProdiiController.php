<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiiController extends Controller
{
    public function index()
    {
        // Data program studi POLINDRA
        $programStudi = [
            'Teknik Informatika',
            'Sistem Informasi Kota cerdas',
            'Rekayasa Perangkat Lunak',
            'Teknik Pendingin dan Tata Udara',
            'Perancangan Manufaktur',
            'Keperawatan',
            'Teknik Mesin'
        ];

        return view('prodii.index', compact('programStudi'));
    }
}