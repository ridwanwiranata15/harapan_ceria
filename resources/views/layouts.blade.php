<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/index.css">
    <link rel="stylesheet" href="../asset/css/all.min.css">
    <link rel="stylesheet" href="../asset/css/dokter.css">
    <link rel="stylesheet" href="../asset/css/pasien.css">
    <link rel="stylesheet" href="../asset/css/detail-child.css">
    <link rel="stylesheet" href="../asset/css/jadwal.css">
    <link rel="stylesheet" href="../asset/css/polikliniik.css">
    <link rel="icon" href="../asset/img/logo.png" >
    <link rel="stylesheet" href="../asset/css/pendaftaran.css">
    <link rel="stylesheet" href="../asset/css/medis.css">
    <link rel="stylesheet" href="../asset/css/obat.css">
    <link rel="stylesheet" href="../asset/css/rawat.css">
    <title>@yield('title') | RS Harapan Ceria</title>
</head>
<body>
    @include('partials.navbar')

    @yield('create')
    @yield('data')
    @yield('detail')
   @yield('edit')
    @include('partials.script')
</body>
</html>
