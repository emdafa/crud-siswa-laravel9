@extends('layout/aplikasi')

@section('apa')
<br>
<br>
<br>
<div class="mb-3">
    <a href='/siswa'><button type="button" class="btn-close btn-close-dark" aria-label="Close"></button></a>
    
</div>
<div class="mb-3">
  <b>Edit Data</b>
</div>
<form method="POST" action="{{'/siswa/'.$data->nomor_induk}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <h3>Nomor Induk Siswa : {{$data->nomor_induk}}</h3>
    </div>
    <div class="mb-3">
        <label for="nama" class="floatingInput">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="{{$data->nama}}">
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
      </div>
      <div class="mb-3">
        {{-- <label class="col-sm-3-form-label">Agama</label> --}}
        {{-- <select name="agama" id="agama">
      <option value="">-- Pilih --</option>
      <option name="agama" id="agama" value="islam" {{$data->agama == 'islam' ? 'selected' : ""}}>islam</option>
      <option name="agama" id="agama" value="kristen" {{$data->agama == 'kristen' ? 'selected' : ""}}>kristen</option>
      <option name="agama" id="agama" value="budha" {{$data->agama == 'budha' ? 'selected' : ""}}>budha</option>
    </select> --}}
    <label for="agama" class="form-label">Agama</label>
    <select class="form-control" name="agama" id="agama">
      @foreach ($date as $bebas)
      <option value="{{$bebas}}" {{$bebas == $bebas ? 'selected': ''}}>{{$bebas}}</option>
      @endforeach
    </select>
    <a href="/agama/create" style="text-decoration: none; color:black;">Menambahkan Agama Disini</a>
    {{-- <input type="text" class="form-control" name="agama" id="agama" value="{{$data->agama}}"> --}}
      </div>
      {{-- <div class="mb-3">
        <label for="col-sm-3-form-label">Hobi</label><br>
        @foreach ($dt as $id_hobi => $hobi)
        <input type="checkbox" class="form-check-input" value="{{$hobi}}" 
        id="id_hobi" name="id_hobi[]" {{$data->hobi == $id_hobi ? 'checked' : ''}}>
        <label for="id_hobi" class="form-check-label" >
          {{$hobi}}</label><br>
        @endforeach
        <a href="/hobi/create">Menambahkan Hobi Disini</a>  
      </div> --}}

      <div class="mb-3">
        <label for="col-sm-3-form-label">Hobi</label><br>
        @foreach ($dt as $id_hobi =>$hobi)
        <input type="checkbox" class="form-check-input" value="{{$id_hobi}}" 
        id="id_hobi" name="id_hobi[]" {{$id_hobi ? 'checked' : ''}}>
        <label for="id_hobi" cl6ass="form-check-label">
          {{$hobi}}</label><br>
        @endforeach
        <a href="/hobi/create" style="text-decoration: none; color:black;">Menambahkan Hobi Disini</a>  
      </div>
      

      {{-- <div class="mb-3">
        <label for="hobi" class="form-label">Hobi</label>
    <select class="form-control" name="hobi" id="hobi">
      @foreach ($dato as $bebas => $hobi)
      <option value="{{$bebas}}" {{$data->hobi == $bebas ? 'selected': ""}}>{{$hobi}}</option>
      @endforeach
    </select>
      </div> --}}
      @if ($data->foto)
          <img style="min-width: 50px; max-height:50px;" src="{{url('foto').'/'.$data->foto}}">
      @endif
      <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" class="form-control" name="foto" id="foto">
      </div>
      <label for="dokumen" class="form-label">Ijasah Terakhir</label>
      <a href="{{url('dokumen').'/'.$data->dokumen}}"><button class="btn btn-primary" type="button">Lihat Ijasah</button></a>
    </td>
      <div class="mb-3">
        <input type="file" class="form-control" name="dokumen" id="dokumen">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-success">UPDATE</button>
      </div>  
</form>
@endsection