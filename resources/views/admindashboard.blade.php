@extends('layouts.main')

@section('container')
<div>
    <h1>Halo {{ $title }}</h1>
    <div>Selamat datang di halaman {{ $title }}</div>
    <div><a href="/" class="btn btn-primary">Logout >></a></div>

    <h2>List Buku</h2>
    <div><a href="/createbook" class="btn btn-primary">+Tambah</a></div>
    <table class="table table-bordered" >
      <thead  style="text-align:center;background-color: rgb(0, 115, 255);color:white">
        <tr>
          <th>Judul</th>
          <th>Kategori</th>
          <th>Deskripsi</th>
          <th>Jumlah</th>
          <th>file Buku</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($listbuku as $listBuku)
          <tr class="table-secondary" style="text-align: center">
            <td>{{ $listBuku['judul'] }}</td>
            <td>{{ $listBuku['kategori'] }}</td>
            <td>{{ $listBuku['deskripsi'] }}</td>
            <td>{{ $listBuku['jumlah'] }}</td>
            <td><img src="{{ asset('storage/pdfs/'. $listBuku['file']) }}" alt=""></td>
            <td><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" d="M3 21v-4.25L16.2 3.575q.3-.275.663-.425t.762-.15q.4 0 .775.15t.65.45L20.425 5q.3.275.438.65T21 6.4q0 .4-.137.763t-.438.662L7.25 21zM17.6 7.8L19 6.4L17.6 5l-1.4 1.4z"/></svg></button>
              <button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z"/></svg></button></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
@endsection