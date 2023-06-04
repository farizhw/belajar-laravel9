<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Beranda</title>
</head>
<body>
  @extends('layouts.app')

  @section('content')    
    <div class="container">
      <div class="p-5 mb-5 bg-body-secondary rounded-3 text-center">
        <h1>Portal Informasi Siswa</h1>
        <p>Selamat Datang di Portal Informasi Siswa SMK ASu</p>
        <a href="{{ url('/info') }}" class="btn btn-dark"> Info Kegiatan </a>
        @can('isAdmin')
        <a href="{{ route('siswa.index') }}" class="btn btn-primary"> Data Siswa</a>
        @endcan
      </div>
    </div>
  @endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>