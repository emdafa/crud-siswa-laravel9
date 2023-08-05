@if ($errors->any())
    <div class="alert alert-danger">
        {{-- <button type="button" class="close" data-dismiss="alert">×</button>  --}}
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::get('success'))
    <div class="alert alert-success">
        {{-- <button type="button" class="close" data-dismiss="alert">×</button>  --}}
        {{Session::get('success')}}
    </div>
@endif