@extends("blank")

@section("konten")

<h1>Semua Data</h1>


@foreach($data as $keranjangbelanja)
Id:  {{$keranjangbelanja->id}} <br>
Total_Belanja:  {{$keranjangbelanja->id_user}} <br>
Jumlah_Pembelian:  {{$keranjangbelanja->no_hp}} <br>
Makanan:  {{$keranjangbelanja->email}} <br>
    
    <a href="{{route('ubah_keranjangbelanja',['id' => $keranjangbelanja->id])}}">Ubah</a>  
    <a href="{{route('tampil_keranjangbelanja',['id' => $keranjangbelanja->id])}}">Tampil</a>
    
    <form action="{{route('hapus_keranjangbelanja',['id'=> $keranjangbelanja->id])}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Hapus</button>
    </form>
    <hr>
    @endforeach
@endsection