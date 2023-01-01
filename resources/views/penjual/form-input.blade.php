@extends("blank")

@section("konten")
<form action= "{{route ("simpan_penjual") }}" method="post">
@csrf

Nama : <input type="text" name="nama"><br>
Username : <input type="text" name="username"><br>
Password : <input type="text" name="password"><br>
No_hp: <input type="text" name="no_hp"><br>
Email: <input type="text" name="email"><br>

<button type="submit">Simpan</button>


</form>
@endsection