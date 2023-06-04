<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Data Siswa</title>
</head>
<body>
  @extends('layouts.app')

  @section('content')
  <div class="container">
    <h3>Data Siswa</h3>
    <table class="table table-striped">
      <tr>
        <th>#</th>
        <th>Nama</th>
        <th>NIS</th>
        <th>Tgl Lahir</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Agus</td>
        <td>0630123</td>
        <td>06-03-2006</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Oces</td>
        <td>0612444</td>
        <td>03-08-2006</td>
      </tr>
    </table>
  </div>
  @endsection

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>