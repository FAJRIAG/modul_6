@extends('layouts.main')

@section('title', 'Daftar Program Studi')

@section('content')
<h1>Daftar Program Studi</h1>
<ul>
    @foreach($prodi as $p)
        <li>{{ $p }}</li>
    @endforeach
</ul>
@endsection
