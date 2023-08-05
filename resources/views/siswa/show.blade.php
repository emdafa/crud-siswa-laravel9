@extends('layout/aplikasi')

@section('apa')
<br>
<br>
<br>
<div class="mb-3">
{{-- <a href='/siswa' class="btn btn-secondary"><- Kembali</a> --}}
<a href='/siswa'><button type="button" class="btn-close btn-close-dark" aria-label="Close"></button></a>
</div>
   {{-- <table class="table shadow">
    <thead> --}}

        <div class="card">
            <div class="card-header">
              Detail Siswa
            </div>
            <div class="card-body">
              <div class="mb-3">
                @foreach ($dat as $item)
                <h4>Nomer Induk Siswa : {{$item->nomor_induk}}</h4>
                <big>@if ($item->foto)
                  <img style="max-width: 80px;" src="{{url('foto').'/'.$item->foto}}">
                  @endif</big><br>
                <big>Nama : {{$item->nama}}</big><br>
                <big>Alamat : {{$item->alamat}}</big><br>
                <big>Gender : {{$item->gender}}</big><br>
                <big>Agama : {{$item->agama}}</big><br>
                <big>Dokumen : <a href="{{url('dokumen').'/'.$item->dokumen}}">Lihat</a></big><br>
                @endforeach
                <big>Hobi : @foreach ($dathob as $i)
                    {{$i->hobi}}, 
                @endforeach</big><br>
              
              {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
          </div>
        
        {{-- <tbody> --}}
           
            {{-- <td>{{$item->nomor_induk}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->gender}}</td>
            <td>{{$item->agama}}</td> 
            <td>{{$item->id_hobi}}</td>  --}}
           
            {{-- <td>  @if ($item->foto)
                <img style="max-width: 50px;" src="{{url('foto').'/'.$item->foto}}">
                @endif</td>
                @endforeach --}}
        {{-- </tbody>
    </thead>
   </table> --}}

</div>
   
@endsection