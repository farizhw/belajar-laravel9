<!DOCTYPE html>
<html lang="en">
<head>
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> --}}
  <title>Ubah Data Siswa</title>
</head>
<body>

  @extends('layouts.app')

  @section('content')
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h3>Ubah Data Siswa</h3>
        </div>
        <div class="card-body">
          <a href="{{ route('siswa.index') }}" class="btn btn-primary mb-3 rounded">Kembali</a>
          <form action="{{ route('siswa.update', $datasiswa->id) }}" method="POST">
          @csrf
          @method('PUT')
          <ul class="list-group mb-3">
            Nama <input type="text" name="inputName" required value="{{ $datasiswa->name }}">
            NIS <input type="text" name="inputNis" required value="{{ $datasiswa->nis }}">
            Email <input type="text" name="inputEmail" required value="{{ $datasiswa->email }}">
          </ul>
          <input type="submit" value="Ubah Data" class="btn btn-success">
          </form>
        </div>
      </div>
    </div>
  @endsection

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> --}}
</body>
</html>