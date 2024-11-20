<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\mahasiswaaaController;
use App\Http\Controllers\remhsController;
use App\Http\Controllers\ProfillController;
use App\Http\Controllers\ProdiiController;

Route::get('/profill', [ProfillController::class, 'index']);
Route::get('/prodii', [ProdiiController::class, 'index']);


Route::resource('remhs', remhsController::class);

Route::get('/mahasiswaaa', [mahasiswaaaController::class,'index']);

Route::get('/siswa', [siswaController::class,'index']);

Route::get('/mahsiswa', [mahsiswaController::class,'index']);

Route::get('/profil', [HalamanController::class, 'profil']);
Route::get('/mahasiswa', [HalamanController::class, 'mahasiswa']);
Route::get('/prodi', [HalamanController::class, 'prodi']);


Route::get('/home', function () {
    $title = "Websaya.com";
    $slug  = "home";
    $konten = "Ini adalah konten websaya.com";
    return view('konten.home', compact('title','slug','konten'));
});

Route::get('/mhs/perulangan', [mhsController::class, 'perulangan'])->name('mhs-perulangan');

Route::get('/mhs/show', [mhsController::class, 'show']) ->name('mhs-show');

Route::get('/', [HomeController::class, 'index'])->name('home');


//Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');


Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi');


Route::get('/mhs', [MhsController::class, 'index'])->name('mhs');

// Route tambahan, jika diperlukan
// Route::get('/welcome', function () {
//     echo "Selamat Datang";
// });

// Route untuk parameter
// Route::get('/show/{id}', function ($id) {
//     echo "Nilai GET parameter id=" . $id;
// });

// Route untuk parameter dengan default
// Route::get('/show/{id?}', function($id=1){
//     echo "Nilai GET parameter id=".$id;
// });

// Route untuk edit dengan validasi nama
// Route::get('/edit/{nama}', function ($nama) {
//     echo "Nilai GET parameter nama=" . $nama;
// })->where('nama', '[A-Za-z]+');

// Route untuk start
// Route::get('/start', function () {
//     echo "<a href='" . route('coba') . "'>Start</a>";
// })->name('start');

// Route untuk coba
// Route::get('/coba', function () {
//     echo "<a href='" . route('start') . "'>Kembali</a>";
// })->name('coba');