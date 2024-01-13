@extends('layouts.main')

@section('container')
<div class="container py-5">
        <div class="w-50 center border rounded px-3 py-3 mx-auto" >
            <h1>Tambah Buku</h1>
            @if($errors->any())
                <div class="alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/createbook" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Buku</label>
                    <input type="text" value="" name="judul" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori Buku</label>
                    <input type="text" name="kategori" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control">
                </div>
                <div class="mb-3">
                <label for="file" class="form-label">File Buku</label>
                <input type="file" name="file" class="form-control">
            </div>
            <div class="mb-3">
            <label for="cover" class="form-label">Cover Buku</label>
            <input type="file" name="cover" class="form-control">
            </div>
                <div class="mb-3 d-grid">
                    <button name="submit" type="submit" class="btn btn-primary">Tambah</button>
                </div>
                <div class="mb-3 d-grid">
                    <a href="javascript:history.back()" >back</a>
                </div>
            </form>
        </div>
    </div>
@endsection