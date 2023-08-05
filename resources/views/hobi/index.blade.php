@extends('layout/aplikasi')

@section('apa')
<br>
<br>
<br>
<div class="mb-3">
    <b>Tabel Hobi</b>
  </div>
  @include('komponen/pesan')
<div class="mb-3">
<a href="/hobi/create" class="btn btn-warning">+ Tambah Data Hobi</a>
</div>
    <table class="table shadow table-bordered">
        <thead>
            <tr class="table-primary">
             
                {{-- <th>Nomer Induk Siswa</th> --}}
                {{-- <th>Nama</th>
                <th>Alamat</th>
                <th>gender</th> --}}
                {{-- <th>No</th> --}}
                <th>Hobi</th>
                <th>Aksi</th>
                {{-- <th>Aksi</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)   
          
                <tr>
                    
                    {{-- <td>{{$item->nomor_induk}}</td> --}}
                    {{-- <td>{{$item->nama}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->gender}}</td> --}}
                    <td>{{$item->hobi}}</td>
                    <td>{{--<a class='btn btn-secondary btn-sm' href='{{ url('/hobi/'.$item->id_hobi) }}'>Detail</a>--}}
                        <a class='btn btn-primary btn-sm' href='{{ url('/hobi/'.$item->id_hobi.'/edit') }}'>Edit</a>
                        <form onsubmit="return confirm('Apakah Anda Yakin Mau Hapus Data ?')" class="d-inline" action="{{'/hobi/'.$item->id_hobi}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>                
            @endforeach
        </tbody>
    </table>
 
        {{$data->links()}}
@endsection