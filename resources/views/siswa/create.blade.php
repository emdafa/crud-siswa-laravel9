@extends('layout/aplikasi')
@section('apa')
<br>
<br>
<br>
@include('komponen/pesan')
<div class="mb-3">
    <a href='/siswa'><button type="button" class="btn-close btn-close-dark" aria-label="Close"></button></a>
    
</div>
<div class="mb-3">
  <b>Tambahkan Data</b>
</div>
<form method="POST" action="/siswa" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="nomor_induk" class="form-label">Nomor Induk Siswa</label>
      <input type="text" class="form-control" name="nomor_induk" id="nomor_induk" value="{{Session::get('nomor_induk')}}">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="{{Session::get('nama')}}">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat">{{Session::get('alamat')}}</textarea>
      </div>
      <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" class="form-control" name="foto" id="foto">
      </div>
      <div class="mb-3">
        <label for="dokumen" class="form-label">Ijasah Terakhir</label>
        <input type="file" class="form-control" name="dokumen" id="dokumen">
      </div>
      <div class="mb-3">
        <label class="col-sm-3-form-label">Gender</label>
        <div class="col-sm-9">
          <input type="radio" name="gender" value="Laki-laki" class="text-light">Laki-laki
          <input type="radio" name="gender" value="Perempuan" class="text-light">Perempuan
        </div>
      </div>
      <div class="mb-3">
        <label class="col-sm-3-form-label">Agama</label>
        <select class="form-control" name="id_agama" id="agama">
          @foreach ($data as $id_agama => $agama)
          <option name="id_agama" class="" value="{{$id_agama}}">{{$agama}}</option>
          @endforeach
        </select>
        <a href="/agama/create" style="text-decoration: none; color:black;">Menambahkan Agama Disini</a>

    {{-- <label for="agama" class="form-label">Agama</label>
      <input type="text" class="form-control" name="agama" id="agama" value="{{Session::get('agama')}}"> --}}
  
      </div>

      
      <div class="mb-3">
        <label for="col-sm-3-form-label">Hobi</label><br>
        @foreach ($dt as $id_hobi => $hobi)
        <input type="checkbox" class="form-check-input" value="{{$id_hobi}}" 
        id="id_hobi" name="id_hobi[]">
        <label for="id_hobi" cl6ass="form-check-label">
          {{$hobi}}        </label><br>
        @endforeach
        <a href="/hobi/create" style="text-decoration: none; color:black;">Menambahkan Hobi Disini</a>  
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