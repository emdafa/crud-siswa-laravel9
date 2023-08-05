@extends('layout/reg')

@section('reg')

<div class="wa-30 center border rounded px-5 py-5 mx-auto shadow bg-light">
    <h1>Register</h1>
<form action="/register/create" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="name" value="{{ Session::get('name') }}" name="name" class="form-control">
    </div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control">
</div>

<div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control">
</div>

<div class="mb-3 d-grid">
    <button type="submit" class="btn btn-primary">Buat</button>
</div>
</form>

<div class="mb-3">
    <p>Sudah Punya Akun?<a href="/login"> Silahkan Login</a></p>
</div>
</div>   

@endsection
