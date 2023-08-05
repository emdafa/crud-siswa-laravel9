@extends('layout/aplikasi')

@section('apa')
<br>
<br>
<br>
<div class="mb-3">
    <b>Tabel Siswa</b>
  </div>
  @include('komponen/pesan')
<div class="mb-3">
    
<a href="/siswa/create" class="btn btn-warning">+ Tambah Data Siswa</a>
{{-- <form onsubmit="return confirm('Apakah Anda Yakin Mau Logout ?')" class="d-inline" action="/logout" method="get">
    @csrf
<button type="submit" class=" btn btn-primary float-end">Logout</button> --}}
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
                {{-- <th>jurusan</th> --}}
                <th>Foto</th>
                <th>Ijasah Terakhir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                   
                    <td><a style="text-decoration:none; color:red;" href="{{ url('/siswa/'.$item->nomor_induk) }}">{{$item->nomor_induk}}</a></td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->gender}}</td>
                    <td>{{$item->agama}}</td>
                    {{-- <td>@foreach ($dathob as $m){{$m->hobi}} <br> @endforeach</td> --}}
                    <td>{{$item->hobi}}</td>
                      <td>
                        @if ($item->foto)
                        <img style="max-width: 50px;" src="{{url('foto').'/'.$item->foto}}">
                        @endif
                     </td> 
                     <td>
                        <a href="{{url('dokumen').'/'.$item->dokumen}}"><button class="btn btn-primary" type="button">Lihat Ijasah</button></a>
                     </td>
                    {{-- <td></td> --}}
                    
         
                    {{-- <td>
                        {{--  //foreach ($dathob as $m) {
                        
                        // echo $m->hobi; echo '<br';
                    //}
                    </td> --}}

                    <td><a class='btn btn-primary btn-sm' href='{{ url('/siswa/'.$item->nomor_induk.'/edit') }}'>Edit</a>
                        <form onsubmit="return confirm('Apakah Anda Yakin Mau Hapus Data ?')" class="d-inline" action="{{'/siswa/'.$item->nomor_induk}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                        </form>
                    </td> 
                   
                </tr>  
                @endforeach 
               
                    
                    
                
                        {{-- @foreach ($data as $item) --}}
                            
                        
                         
                    {{-- <td>
                        @if ($item->foto)
                        <img style="max-width: 50px;" src="{{url('foto').'/'.$item->foto}}">
                        @endif
                     </td>     --}}
                
                    

                     {{-- <td>
                        
                        
                    </td>       
                @endforeach --}}
        </tbody>
    </table>
    {{-- <div class="mx-auto">
    <a class="btn btn-primary" href="/agama">Form Agama</a>
    <a class="float-end btn btn-primary" href="/hobi">Form Hobi</a>
    </div> --}}
        {{-- {{$data->links()}} --}}

{{-- 
        @php
                        $data = explode('.',$item->id_hobi);
                        @endphp
                       @foreach ($data as $i)
                           {{$data_hobi[$i]->id_hobi}}
                           
                       @endforeach --}}
@endsection