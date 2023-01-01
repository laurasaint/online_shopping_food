@extends("blank")

@section("konten")

<h1>Semua Data</h1>
@if(auth()->user()->level == 1)
    <a href="{{ route("buat_penjual") }}" >Add Penjual</a>
@endif
<br><br>

@foreach($data as $penjual)

Id:  {{$penjual->id}} <br>
Id_user:  {{$penjual->id_user}} <br>
No_hp:  {{$penjual->no_hp}} <br>
Email:  {{$penjual->email}} <br>

    <a href="{{route('ubah_penjual',['id' => $penjual->id])}}">Ubah</a>  
    <a href="{{route('tampil_penjual',['id' => $penjual->id])}}">Tampil</a>
    
    <form action="{{route('hapus_penjual',['id'=> $penjual->id])}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Hapus</button>
    </form>
    <hr>
    @endforeach
@endsection