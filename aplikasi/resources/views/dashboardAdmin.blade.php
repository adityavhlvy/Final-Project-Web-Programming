<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>Selamat Datang</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <p>ID: {{ $data['id'] }}</p>
    <p>Nama: {{ $data['nama'] }}</p>
    <p>NIM: {{ $data['nim'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
</body>

</html>
