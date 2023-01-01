@extends("blank")

@section("konten")
<form action= "{{route ("update_makanan",['id'=>$id] )}}" method="post">
@csrf
@method("put")

harga: <input type="text" name="harga"><br>
banyak_persediaan: <input type="text" name="banyak_persediaan"><br>
nama_makanan: <input type="text" name="nama_makanan"><br>
diskon: <input type="text" name="diskon"><br>
deskripsi: <input type="text" name="deskripsi"><br>
count: <input type="text" name="count"><br>
<select name="kategori" id="kategori">
    @foreach($kategori as $k)
        <option value="{{$k->id}}">{{$k->kategori}}</option>
    @endforeach
</select>
<br><br>
<button type="submit">Simpan</button>


</form>
@endsection