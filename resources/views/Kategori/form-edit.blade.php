@extends("blank")

@section("konten")
<form action= "{{route ("update_kategori",['id'=>$id] )}}" method="post">
@csrf
@method("put")

Kategori Dokumen: <input type="text" name="kategori"><br>

<button type="submit">Simpan</button>


</form>
@endsection