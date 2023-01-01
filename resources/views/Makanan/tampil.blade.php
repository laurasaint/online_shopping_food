


@extends("blank")

@section("konten")

ID : {{$makanan->id}} <br>
Nama : {{$makanan->nama_makanan}}<br>
Harga : {{$makanan->harga}}<br>
Persediaan : {{$makanan->banyak_persediaan}}<br>
Diskon : {{$makanan->diskon}}<br>
Deskripsi : {{$makanan->deskripsi}}<br>
Count : {{$makanan->count}}

@endsection