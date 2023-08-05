@extends('layout/aplikasi')

@section('apa')
<a href='/agama' class="btn btn-secondary"><- Kembali</a>

   <table class="table">
    <thead>
        {{-- <th>Nama</th> --}}
        {{-- <th>No Induk Siswa</th> --}}
        {{-- <th>Alamat</th>
        <th>Gender</th> --}}
        <th>Agama</th>
        <tbody>
            {{-- <td>{{$data->nama}}</td> --}}
            {{-- <td>{{$data->nomor_induk}}</td> --}}
            {{-- <td>{{$data->alamat}}</td>
            <td>{{$data->gender}}</td> --}}
            <td>{{$data->agama}}</td>    
        </tbody>
    </thead>
   </table>

   
   
@endsection