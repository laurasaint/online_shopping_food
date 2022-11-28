@extends("blank")

@section("konten")
<form action= "{{route ("update_costumer",['id'=>$id] )}}" method="post">
@csrf
@method("put")

Id: <input type="text" name="id"><br>
Id_user: <input type="text" name="id_user"><br>
No_hp: <input type="text" name="no_hp"><br>
Email: <input type="text" name="email"><br>

<button type="submit">Simpan</button>


</form>
@endsection