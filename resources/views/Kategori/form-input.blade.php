@extends("blank")

@section("konten")
<form action= "{{route ("simpan_kategori") }}" method="post">
@csrf

Kategori: <input type="text" name="kategori"><br>

<button type="submit">Simpan</button>


</form>
@endsection