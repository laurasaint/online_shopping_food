@extends("blank")

@section("konten")
<form action= "{{route ("update_penjual",['id'=>$id] )}}" method="post">
@csrf
@method("put")

No_hp: <input type="text" name="no_hp"><br>
Email: <input type="text" name="email"><br>

<button type="submit">Simpan</button>


</form>
@endsection