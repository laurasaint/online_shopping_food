@extends("blank")

@section("konten")
<h1>Kategori {{$kategori->kategori}}</h1>

<table class="table table-hover">
    <thead class="table-dark">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Kategori</h>
        <th>Harga</th>
        <th>Persedian</th>
        <th>Diskon</th>
        <th>Count</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($makanan as $mkn)
    
    <tr>
        <td>{{$mkn->id}}</td>
        <td>{{$mkn->nama_makanan}}</td>
        <td>{{$mkn->deskripsi}}</td>
        <td>{{$mkn->kategori}}</td>
        <td>{{$mkn->harga}}</td>
        <td>{{$mkn->banyak_persediaan}}</td>
        <td>{{$mkn->diskon}}</td>
        <td>{{$mkn->count}}</td>
        <td>
            @if(auth()->user()->level == 1)
                <a href="{{route('ubah_makanan',['id' => $mkn->id])}}">Ubah</a>  
                <a href="{{route('tampil_makanan',['id' => $mkn->id])}}">Tampil</a>
                
                <form action="{{route('hapus_makanan',['id'=> $mkn->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Hapus</button>
                </form>
            @elseif(auth()->user()->level == 2)
                <a href="{{route('simpan_keranjangbelanja',['id' => $mkn->id])}}">Tambah ke keranjang</a>  
            @endif
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection
