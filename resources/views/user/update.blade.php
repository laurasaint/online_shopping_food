@extends("blank")

@section("konten")

<form action="{{ route("user_update", ["id" => $id]) }}" method="post">
    @csrf
    @method("put")

    Nama : <input type="text" name="name"> <br>
    Email : <input type="email" name="email"> <br>
    Password : <input type="password" name="password"> <br>
<br>
    <button class="btn btn-info" type="submit">Simpan</button>

</form>

@endsection