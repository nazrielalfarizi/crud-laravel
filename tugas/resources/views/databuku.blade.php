<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pencatatan Buku</title>
  </head>
  <body>
    <h1 class="text-center mb-1">DATA BUKU</h1>
    <p class="text-center mb-4">Muhammad Nazriel Alfarizi</p>
    <div class="container">
      <div class="row">
      <table class="table table-hover border-1">
  <thead>
    <tr>
            <th>NO</th>
            <th>Judul</th>
            <th>Author</th>
            <th>Detail Buku</th>
            <th>Penerbit</th>
            <th width=150px>Aksi</th>
    </tr>
  </thead>
  <tbody>
  @php
  $no = 1;
  @endphp
  @foreach ($data as $row)
    <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->judul }}</td>
                <td>{{ $row->author }}</td>
                <td><a href="/detailbuku/{{ $row->id }}" class="btn btn-light"> Lihat</a></td>
                <td>{{ $row->penerbit }}</td>
                <td>
                <a href="/tampilkandata/{{ $row->id }}" class="btn btn-primary"> Edit</a>
                <a href="/delete/{{ $row->id }}" class="btn btn-danger"> Hapus</a>
                </td>
            </tr>
    @endforeach
  </tbody>
</table><br>
      </div>
    </div>
    <center><a href="/tambahbuku" class="btn btn-dark">+ Tambah Data</a></center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>