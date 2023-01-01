@extends("blank")

@section("konten")

<h1>Semua Data</h1>
@if(auth()->user()->level == 1)
    <a href="{{ route("buat_costumer") }}" >Add Costumer</a>
@endif

<br><br>

@foreach($data as $costumer)
Id:  {{$costumer->id}} <br>
Id_user:  {{$costumer->id_user}} <br>
No_hp:  {{$costumer->no_hp}} <br>
Email:  {{$costumer->email}} <br>

    <a href="{{route('ubah_costumer',['id' => $costumer->id])}}">Ubah</a>  
    <a href="{{route('tampil_costumer',['id' => $costumer->id])}}">Tampil</a>
    
    <form action="{{route('hapus_costumer',['id'=> $costumer->id])}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Hapus</button>
    </form>
    <hr>
    @endforeach
@endsection


