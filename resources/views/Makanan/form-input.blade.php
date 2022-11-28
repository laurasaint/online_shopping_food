@extends("blank")

@section("konten")
<form action= "{{route ("simpan_makanan") }}" method="post">
@csrf

id: <input type="text" name="id"><br>
harga: <input type="text" name="harga"><br>
banyak_persediaan: <input type="text" name="banyak_persediaan"><br>
nama_makanan: <input type="text" name="nama_makanan"><br>
diskon: <input type="text" name="diskon"><br>
deskripsi: <input type="text" name="deskripsi"><br>
count: <input type="text" name="count"><br>

<button type="submit">Simpan</button>


</form>
@endsection