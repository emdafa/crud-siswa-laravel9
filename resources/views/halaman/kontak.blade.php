@extends('layout/aplikasi')

@section('konten')
<h1>{{$judul}}</h1>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam eius expedita quaerat alias ea obcaecati, incidunt sunt unde modi praesentium?</p>
<ul>
    <li>Email :{{$kontak ['email']}}</li>
    <li>Youtube :{{$kontak ['yt']}}</li>
</ul>
@endsection
    