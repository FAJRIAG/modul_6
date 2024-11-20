@extends('layouts.main')

@section('title')

@section('content')
<body>
    <h1>Profil Mahasiswa</h1>
    <p>Nama: {{ $profilMahasiswa['nama'] }}</p>
    <p>NIM: {{ $profilMahasiswa['nim'] }}</p>
    <p>Jurusan: {{ $profilMahasiswa['jurusan'] }}</p>
    <p>Prodi: {{ $profilMahasiswa['Prodi'] }}</p>
    <p>Angkatan: {{ $profilMahasiswa['angkatan'] }}</p>
</body>
@endsection
