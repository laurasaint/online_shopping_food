@extends("blank")

@section("konten")

<h1>Semua Data</h1>


@foreach($data as $makanan)
Id:  {{$makanan->id}} <br>
Harga:  {{$makanan->harga}} <br>
Banyak_persediaan:  {{$makanan->banyak_persediaan}} <br>
Nama_Makanan:  {{$makanan->nama_makanan}} <br>
Diskon:  {{$makanan->diskon}} <br>
Deskripsi:  {{$makanan->deskripsi}} <br>
Count:  {{$makanan->count}} <br>

    <a href="{{route('ubah_makanan',['id' => $makanan->id])}}">Ubah</a>  
    <a href="{{route('tampil_makanan',['id' => $makanan->id])}}">Tampil</a>
    
    <form action="{{route('hapus_makanan',['id'=> $makanan->id])}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Hapus</button>
    </form>
    <hr>
    @endforeach
@endsection