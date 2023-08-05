@extends('layout/aplikasi')

@section('apa')
<br>
<br>
<br>
<div class="mb-3">
    <a href='/agama'><button type="button" class="btn-close btn-close-dark" aria-label="Close"></button></a>
</div>
<div class="mb-3">
  <b>Tambahkan Data</b>
</div>
<form method="POST" action="/agama" acenctype="multipart/form-data">
    @csrf
    {{-- <div class="mb-3">
      <label for="nomor_induk" class="form-label">Nomor Induk Siswa</label>
      <input type="text" class="form-control" name="nomor_induk" id="nomor_induk" value="{{Session::get('nomor_induk')}}">
    </div> --}}
    {{-- <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="{{Session::get('nama')}}">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat">{{Session::get('alamat')}}</textarea>
      </div>

      <div class="mb-3">
        <label class="col-sm-3-form-label">Gender</label>
        <div class="col-sm-9">
          <input type="radio" name="gender" value="Laki-laki">Laki-laki
          <input type="radio" name="gender" value="Perempuan">Perempuan
        </div>
      </div> --}}
      <div class="mb-3">
        {{-- <label class="col-sm-3-form-label">Agama</label>
        <select name="agama" id="agama">
      @foreach ($data as $nomor_induk => $agama)
      <option value="{{$nomor_induk}}">{{$agama}}</option>
      @endforeach
    
    </select> --}}
    <label for="agama" class="form-label">Agama</label>
      <input type="text" class="form-control" name="agama" id="agama" value="{{Session::get('agama')}}">

      </div>
      {{-- <div class="mb-3">
         <select class="form-select" aria-label="Default select example">
          <option selected>Open this select menu</option>
          <option value="1" id="l">Laki-Laki</option>
          <option value="2" id="p">Perempuan</option>
          
        </select>
      </div> --}}
      <div class="mb-3">
        <button type="submit" class="btn btn-success">SIMPAN</button>
      </div>
</form>
@endsection