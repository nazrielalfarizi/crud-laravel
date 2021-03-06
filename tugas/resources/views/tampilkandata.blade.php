<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit Data</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Edit Data Buku</h1>
    <div class="row justify-content-center">
      <div class="col-4">
      <div class="card">
      <div class="card-body">
      <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
    <input type="text" name="judul" class="form-control" value="{{ $data->judul }}" >
    <label for="exampleInputEmail1" class="form-label">Jumlah halaman</label>
    <input type="number" name="halaman" class="form-control" value="{{ $data->halaman }}" >
    <label for="exampleInputEmail1" class="form-label">Author</label>
    <input type="text" name="author" class="form-control" value="{{ $data->author }}"  >
    <label for="exampleInputEmail1" class="form-label">Synopsis</label>
    <textarea name="synopsis" id="" cols="30" rows="10" class= form-control>{{ $data->synopsis }}</textarea>
    <label for="exampleInputEmail1" class="form-label">Tahun terbit</label>
    <input type="number" name="tahun_terbit" class="form-control" value="{{ $data->tahun_terbit }}" >
    <label for="exampleInputEmail1" class="form-label">Penerbit</label>
    <input type="text" name="penerbit" class="form-control" value="{{ $data->penerbit }}"  >
  </div>
  <a href="/buku" class="btn btn-danger">Batal</a> <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      </div>
      </div>
    </div>

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