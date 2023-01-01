@extends("blank")

@section("konten")
<a href="{{ route("buat_makanan") }}" >Add Makanan</a>
<h1>Semua Data</h1>



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
    @foreach($data as $makanan)
    
    <tr>
        <td>{{$makanan->id}}</td>
        <td>{{$makanan->nama_makanan}}</td>
        <td>{{$makanan->deskripsi}}</td>
        <td>{{$makanan->kategori}}</td>
        <td>{{$makanan->harga}}</td>
        <td>{{$makanan->banyak_persediaan}}</td>
        <td>{{$makanan->diskon}}</td>
        <td>{{$makanan->count}}</td>
        <td>
            @if(auth()->user()->level == 1)
                <a href="{{route('ubah_makanan',['id' => $makanan->id])}}">Ubah</a>  
                <a href="{{route('tampil_makanan',['id' => $makanan->id])}}">Tampil</a>
                
                <form action="{{route('hapus_makanan',['id'=> $makanan->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Hapus</button>
                </form>
            @elseif(auth()->user()->level == 2)
                <a href="{{route('simpan_keranjangbelanja',['id' => $makanan->id])}}">Tambah ke keranjang</a>  
            @endif
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection
