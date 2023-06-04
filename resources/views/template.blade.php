<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  {{-- header --}}
  <nav class="navbar navbar-expand bg-light mb-5">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#">SMK ASu</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/beranda') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/data') }}">Data Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/info') }}">Info Kegiatan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{-- header --}}

  @yield('content')

  {{-- footer --}}
  <footer class="fixed-bottom bg-dark py-3 mx-auto">
    <div class="text-center fw-semibold text-light"> Copyright : Farizhw </div>
  </footer>
  {{-- footer --}}


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>