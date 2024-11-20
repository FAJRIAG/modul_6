<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mhsController extends Controller
//{
    //public function index ()
   // {
        //return " Mengakses fungsi di controller menggunakan route";
   // }
//} 


    //   {
       // public function index(){
           // $mhs = "Nadia";
            //return view ('mhs/index', compact('mhs'));
       // }
   // }

   
   {
    public function show()
    {
        $mhs = ['Adeeva', 'Nadia', 'FAJRI'];
        return view('mhs.show', compact('mhs'));
    }

    public function index()
    {
        $mhs = "FAJRI";
        return view('mhs.index', compact('mhs'));
    }

    public function perulangan(){
        $mhs = ['Adeeva', 'Nadia', 'TIARA'];
        return view('mhs.perulangan', compact('mhs'));
    }
}