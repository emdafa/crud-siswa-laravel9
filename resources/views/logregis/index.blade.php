@extends('layout/log')

@section('log')

<div class="wa-30 center border rounded px-5 py-5 mx-auto shadow bg-light">
    <div class="mb-3">
        <h1>Login</h1>    
    </div>
<form action="login/process" method="POST">
    @csrf
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control" placeholder="masukan email">
</div>

<div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" placeholder="masukan password">
</div>

<div class="mb-3 d-grid">
    <button type="submit" class="btn btn-primary">Masuk</button>
</div>
</form>

<div class="mb-3">
    <p>Belum Punya Akun?<a href="/register">Silahkan Buat Disini</a></p>
</div>
</div>   

@endsection
