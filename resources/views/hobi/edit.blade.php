@extends('layout/aplikasi')

@section('apa')
<br>
<br>
<br>
<div class="mb-3">
    <a href='/hobi'><button type="button" class="btn-close btn-close-dark" aria-label="Close"></button></a>
    
</div>
<div class="mb-3">
  <b>Edit Data</b>
</div>
<form method="POST" action="{{'/hobi/'.$data->id_hobi}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        {{-- <h3>Nomor Induk Siswa : {{$data->nomor_induk}}</h3> --}}
    </div>
    {{-- <div class="mb-3">
        <label for="nama" class="floatingInput">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="{{$data->nama} }">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat">{{$data->alamat}}</textarea>
      </div>
      <div class="mb-3">
        <label class="col-sm-3-form-label">Gender</label>
        <div class="col-sm-9">
          <input type="radio" name="gender" value="Laki-laki" {{$data->gender == 'Laki-laki' ? 'checked' : ""}}>Laki-laki
          <input type="radio" name="gender" value="Perempuan" {{$data->gender == 'Perempuan' ? 'checked' : ""}}>Perempuan
        </div>
      </div> --}}
      <div class="mb-3">
        {{-- <label class="col-sm-3-form-label">Agama</label> --}}
        {{-- <select name="agama" id="agama">
      <option value="">-- Pilih --</option>
      <option name="agama" id="agama" value="islam" {{$data->agama == 'islam' ? 'selected' : ""}}>islam</option>
      <option name="agama" id="agama" value="kristen" {{$data->agama == 'kristen' ? 'selected' : ""}}>kristen</option>
      <option name="agama" id="agama" value="budha" {{$data->agama == 'budha' ? 'selected' : ""}}>budha</option>
    </select> --}}
    <label for="hobi" class="form-label">Hobi</label>
    <input type="text" class="form-control" name="hobi" id="hobi" value="{{$data->hobi}}">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-success">UPDATE</button>
      </div>
</form>
@endsection