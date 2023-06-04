<!DOCTYPE html>
<html lang="en">
<head>
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> --}}
  <title>Document</title>
</head>
<body>

  @extends('layouts.app')

  @section('content')
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h3>Data Siswa</h3>
        </div>
        <div class="card-body">
          <a href="{{ route ('siswa.create') }}" class="btn btn-primary mb-3 rounded">Tambah Data Siswa</a>
          <table class="table table-bordered table-striped">
            <tr>
              <th>Nama</th>
              <th>NIS</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
            @foreach ($datasiswa as $s)
            <tr>
              <td>{{ $s->name }}</td>
              <td>{{ $s->nis }}</td>
              <td>{{ $s->email }}</td>
              <td>
                <ul class="nav justify-content-end">
                  <a href="{{ route ('siswa.show', $s->id) }}" class="btn btn-success mr-2 rounded">Show</a>
                  <a href="{{ route ('siswa.edit', $s->id) }}" class="btn btn-primary mx-2 rounded">Edit</a>
                  <form action="{{ route ('siswa.destroy', $s->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-warning rounded">Delete</button>
                  </form>
                </ul>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  @endsection

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> --}}
</body>
</html>