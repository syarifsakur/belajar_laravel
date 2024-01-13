@extends('layouts.main')

@section('container')
<div class="container py-5">
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
<h1>Register</h1>
@if($errors->any())
                <div class="alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
<form action="/register" method="POST">
    @csrf
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" value="" name="username" class="form-control">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">password</label>
        <input type="password" value="" name="password" class="form-control">
    </div>
    <div class="mb-3 d-grid">
        <button name="submit" type="submit" class="btn btn-primary">Register</button>
    </div>
    <div class="mb-3 d-grid" style="margin-left: 190px">
        <p>sudah punya akun ?</p>
       <a href="/" style="margin-left: 50px">Login</a>
    </div>
</form>
    </div>
</div>
@endsection
