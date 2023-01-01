 @extends("blank")

@section("konten")




@extends("blank")

@section("konten")

<h1>Semua Data</h1>

@if(auth()->user()->level == 1)
    <a href="{{ route("buat_kategori") }}" >Add Kategori</a>
@endif

<table class="table table-hover">
    <thead class="table-dark">
    <tr>
        <th>ID</th>
        <th>Kategori</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $kategori)
    
    <tr>
        <td>{{$kategori->id}}</td>
        <td>{{$kategori->kategori}}</td>
        <td>
            @if(auth()->user()->level == 1)
                <a href="{{route('ubah_kategori',['id' => $kategori->id])}}">Ubah</a>  
                <a href="{{route('tampil_kategori',['id' => $kategori->id])}}">Tampil</a>
                
                <form action="{{route('hapus_kategori',['id'=> $kategori->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Hapus</button>
                </form>
            @elseif(auth()->user()->level == 2)
                <a href="{{route('filter_kategori',['id' => $kategori->id])}}">Lihat Makanan</a>  
            @endif
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection
