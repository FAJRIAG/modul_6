<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
</head>
<body>
    <h1>Selamat Datang di Halaman Utama</h1>
    <ul>
        <li><a href="{{ route('home') }}">HOME</a></li>
        <li><a href="{{ route('mahasiswa') }}">MAHASISWA</a></li>
        <li><a href="{{ route('prodi') }}">PRODI</a></li>
    </ul>
</body>
</html>