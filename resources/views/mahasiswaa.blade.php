@extends('layouts.main')

@section('title', 'Daftar Mahasiswa')

@section('content')
<h1>Daftar Mahasiswa</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Program Studi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswa as $index => $mhs)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $mhs['name'] }}</td>
            <td>{{ $mhs['nim'] }}</td>
            <td>{{ $mhs['prodi'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
