@extends('layouts.main')

@section('container')
  <div>
    <h1>Halo {{$data}}</h1>
    <div>Selamat datang Perpustakaan M4T0</div>
    <div><a href="/" class="btn btn-primary">Logout >></a></div>
    
    <h2>List Buku</h2>
    <table class="table table-bordered">
      <thead style="text-align:center;background-color: rgb(0, 115, 255);color:white">
        <tr>
          <th>Judul</th>
          <th>Kategori</th>
          <th>Deskripsi</th>
          <th>Jumlah</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($listbuku as $listBuku)
          <tr class="table-secondary" style="text-align: center">
            <td>{{ $listBuku['judul'] }}</td>
            <td>{{ $listBuku['kategori'] }}</td>
            <td>{{ $listBuku['deskripsi'] }}</td>
            <td>{{ $listBuku['jumlah'] }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
@endsection