@extends('layouts.main')

@section('container')
    <div class="container py-5">
        <div class="w-50 center border rounded px-3 py-3 mx-auto" >
            <h1>Login</h1>
            @if($errors->any())
                <div class="alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/" method="POST" >
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" value="{{ old('username') }}" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3 d-grid">
                    <button name="submit" type="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="mb-3 d-grid" style="margin-left: 190px">
                    <p>belum punya akun ?</p>
                   <a href="/register" style="margin-left: 43px">Register</a>
                </div>
            </form>
            </form>
        </div>
    </div>
@endsection