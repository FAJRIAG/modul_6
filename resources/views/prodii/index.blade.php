@extends('layouts.main')

@section('title')

@section('content')
<h1>Program Studi POLINDRA</h1>
<ul>
    @foreach($programStudi as $prodi)
        <li>{{ $prodi }}</li>
    @endforeach
</ul>
@endsection
