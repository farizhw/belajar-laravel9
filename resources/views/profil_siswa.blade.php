<!DOCTYPE html>
<html lang="en">
<head>
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> --}}
  <title>Profil Siswa</title>
</head>
<body>

  @extends('layouts.app')

  @section('content')
    <div class="container d-flex justify-content-center">
      <div class="card w-50">
        <div class="card-header">
          <h3>Profil Siswa</h3>
        </div>
        <div class="card-body">
          @can('isAdmin')
            <a href="{{ route ('siswa.index') }}" class="btn btn-primary mb-3 rounded ">Kembali</a>
          @endcan
          <div class="row">
            <h5 class="col-2">Nama</h5>
            <h5 class="col-10 fw-semibold">: {{ $datasiswa->name }}</h5>
          </div>
          <div class="row">
            <h5 class="col-2">NIS</h5>
            <h5 class="col-10 fw-semibold">: {{ $datasiswa->nis }}</h5>
          </div>
          <div class="row">
            <h5 class="col-2">Email</h5>
            <h5 class="col-10 fw-semibold">: {{ $datasiswa->email }}</h5>
          </div>
        </div>
      </div>
    </div>
  @endsection

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> --}}
</body>
</html>