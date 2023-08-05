@extends('layout/aplikasi')

@section('apa')
<div class="mb-3">
    <b>Tabel Data</b>
  </div>
<div class="mb-3">
    
<a href="/siswa/create" class="btn btn-warning">+ Tambah Data Siswa</a>
<form onsubmit="return confirm('Apakah Anda Yakin Mau Logout ?')" class="d-inline" action="/logout" method="get">
    @csrf
<button type="submit" class=" btn btn-primary float-end">Logout</button>
</form>
</div>
    <table class="table shadow table-bordered">
        <thead>
            <tr class="table-primary">
             
                <th>Nomer Induk Siswa</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>gender</th>
                <th>agama</th>
                <th>hobi</th>
                {{-- <th>Foto</th> --}}
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($data as $item)
                <tr>
                    
                    <td>{{$item->nomor_induk}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->gender}}</td>
                    <td>{{$item->agama}}</td>
                    <td>{{$item->hobi}}</td>  --}}

                    
                    
                         
                    {{-- <td>
                        @if ($item->foto)
                        <img style="max-width: 50px;" src="{{url('foto').'/'.$item->foto}}">
                        @endif
                     </td>     --}}
                
                    

                     <td>{{--<a class='btn btn-secondary btn-sm' href='{{ url('/siswa/'.$item->nomor_induk) }}'>Detail</a> --}}
                        {{-- <a class='btn btn-primary btn-sm' href='{{ url('/siswa/'.$item->nomor_induk.'/edit') }}'>Edit</a>
                        <form onsubmit="return confirm('Apakah Anda Yakin Mau Hapus Data ?')" class="d-inline" action="{{'/siswa/'.$item->nomor_induk}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>                 --}}
            {{-- @endforeach --}}
        </tbody>
    </table>
    <a class="btn btn-danger" href="/agama">Form Agama</a>
    <a class="float-end btn btn-danger" href="/hobi">Form Hobi</a>
 
        {{-- {{$data->links()}} --}}
@endsection