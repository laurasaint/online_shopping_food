@extends("blank")

@section("konten")

@if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
@endif

<form action="{{ route("user_simpan") }}" method="post">
    @csrf

    Nama : <input type="text" name="name"> <br>
    username : <input type="text" name="username"> <br>
    Email : <input type="email" name="email"> <br>
    Password : <input type="password" name="password"> <br>
<br>
    <button class="btn btn-info" type="submit">Simpan</button>

</form>
@endsection